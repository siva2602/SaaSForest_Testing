<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Livewire\Component;

class HelloWorld extends Component
{
    public function render()
    {
        $categories = Category::all();
        $products = Product::get();
        $sizes = Size::all();
        $colors = Color::all();
        $cartCount = auth()->check() ? Cart::where('user_id', auth()->user()->id)->count() : 0;

        return view('livewire.hello-world', ['categories' => $categories,
        'products' => $products,
        'sizes' => $sizes,
        'colors' => $colors,
        'cartCount' => $cartCount,
        'searchProduct' => '']);
    }
}
