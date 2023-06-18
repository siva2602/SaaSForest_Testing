<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\Variant;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        try {
            $categories = Category::all();
            $products = Product::when(($request->search_product ?? false), function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->search_product . '%');
            })->get();
            $sizes = Size::all();
            $colors = Color::all();
            $cartCount = auth()->check() ? Cart::where('user_id', auth()->user()->id)->count() : 0;

            return view('index', [
                'categories' => $categories,
                'products' => $products,
                'sizes' => $sizes,
                'colors' => $colors,
                'cartCount' => $cartCount,
                'searchProduct' => $request->search_product ?? ''
            ]);
        } catch (Exception $exception) {
            info($exception->getMessage());
        }
    }

    public function getVariantPrice(Request $request)
    {
        try {
            $variant = Variant::where('product_id', $request->product_id)
            ->where('size_id', $request->size_id)
            ->where('color_id', $request->color_id)->first();

            return response($variant, Response::HTTP_OK);;
        } catch (Exception $exception) {
            info($exception->getMessage());
        }
    }

    public function addToCart(Request $request) {
        try {

            $checkExitCart = Cart::where('product_id', $request->product_id)
            ->where('variant_id', $request->variant_id)
            ->where('user_id', auth()->user()->id)->first();

            if($checkExitCart) {
                $checkExitCart->update([
                    'quantity' => $checkExitCart->quantity + 1
                ]);
            } else {

                Cart::create([
                    'product_id' => $request->product_id,
                    'variant_id' => $request->variant_id,
                    'user_id' => auth()->user()->id,
                    'quantity' => 1
                ]);
            }



            return response(['count' => Cart::where('user_id', auth()->user()->id)->count()], Response::HTTP_OK);
        } catch (Exception $exception) {
            info($exception->getMessage());
        }
    }
}
