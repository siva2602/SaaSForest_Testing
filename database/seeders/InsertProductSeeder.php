<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = Category::find(1);

        try {
            DB::beginTransaction();

            for ($i = 0; $i < 8; $i++) {
                $product = Product::create([
                    'name' => 'Product '. $i + 1,
                    'category_id' => $category->id,
                    'price' => rand(100,500)
                ]);

                Size::all()->each(function($size) use($product) {
                    Color::all()->each(function($color) use ($size, $product) {
                        $product->variant()->create([
                            'size_id' => $size->id,
                            'color_id' => $color->id,
                            'price' => rand(500,999)
                        ]);
                    });
                });
            }

            DB::commit();

        } catch (Exception $exception) {
            DB::rollBack();

            info($exception->getMessage());
        }
    }
}
