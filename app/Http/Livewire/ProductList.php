<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home Page')]
class ProductList extends Component
{
    public $sizeId = 0;

    public $selectedProductId = 0;
    public $selectedSizeId = 0;
    public $selectedColorId = 0;

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

    public function addToCart($productId)
    {
        $checkExitCart = Cart::where('product_id', $productId)
            ->where('variant_id', '')
            ->where('user_id', auth()->user()->id)->first();

        if ($checkExitCart) {
            $checkExitCart->update([
                'quantity' => $checkExitCart->quantity + 1
            ]);
        } else {

            Cart::create([
                'product_id' => $productId,
                'variant_id' => '',
                'user_id' => auth()->user()->id,
                'quantity' => 1
            ]);
        }
    }

    public function selectSize($productId, $sizeId)
    {
        $this->selectedProductId = $productId;
        $this->selectedSizeId = $sizeId;
    }

    public function selectColor($productId, $colorId)
    {
        if($this->selectedProductId != $productId) {

        }

        $this->selectedColorId = $colorId;

        dd($this->selectedProductId,$this->selectedSizeId,$this->selectedColorId);
    }
}
