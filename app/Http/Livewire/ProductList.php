<?php

namespace App\Http\Livewire;

use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
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
}
