<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Category;
use Livewire\Component;

class NavBar extends Component
{
    public function render()
    {
        $categories = Category::all();

        $cartCount = auth()->check() ? Cart::where('user_id', auth()->user()->id)->count() : 0;

        return view('livewire.nav-bar', [
            'categories' => $categories,
            'cartCount' => $cartCount,
        ]);
    }
}
