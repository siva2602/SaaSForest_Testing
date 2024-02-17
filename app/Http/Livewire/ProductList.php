<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\Variant;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home Page')]
class ProductList extends Component
{
    public function render()
    {
        $products = Product::get();
        $sizes = Size::all();
        $colors = Color::all();
        return view('livewire.product-list', [
            'products' => $products,
            'sizes' => $sizes,
            'colors' => $colors,
        ]);
    }

    public function getPrice($productId, $sizeId, $colorId)
    {

        $variant = Variant::where('product_id', $productId)
            ->where('size_id', $sizeId)
            ->where('color_id', $colorId)->first();

        return ['price' => $variant->price, 'variant_id' => $variant->id];
    }

    public function addToCart($productId, $variantId)
    {
        $checkExitCart = Cart::where('product_id', $productId)
            ->where('variant_id', $variantId)
            ->where('user_id', auth()->user()->id)->first();

        if ($checkExitCart) {
            $checkExitCart->update([
                'quantity' => $checkExitCart->quantity + 1
            ]);
        } else {

            Cart::create([
                'product_id' => $productId,
                'variant_id' => $variantId,
                'user_id' => auth()->user()->id,
                'quantity' => 1
            ]);
        }

        return ['count' => Cart::where('user_id', auth()->user()->id)->count()];
    }
}
