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
        $products = Product::get();
        $sizes = Size::all();
        $colors = Color::all();

        return view('livewire.hello-world', [
            'products' => $products,
            'sizes' => $sizes,
            'colors' => $colors,
        ]);
    }
}
