<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 5) as $index) {
            DB::table('products')->insert([
                'category_id' => 4,
                'subcategory_id' => 6,
                'section_id' => 4,
                'brand_id' => 1,
                'product_name' => $faker->sentence(3),
                'product_slug' => $faker->sentence(3),
                'product_code' => $faker->sentence(1),
                'product_quantity' => $faker->numberBetween($min = 10, $max = 60),
                'product_regular_price' => $faker->numberBetween($min = 20, $max = 1000),
                'product_seal_price' => $faker->numberBetween($min = 20, $max = 1000),
                'product_discount' => $faker->numberBetween($min = 10, $max = 60),
                'product_video' => '',
                'main_image' => '',
                'short_description' => $faker->sentence(10),
                'description' => $faker->text(),
                'meta_title' => $faker->sentence(5),
                'meta_keywords' => $faker->sentence(5),
                'meta_description' => $faker->sentence(7),
                'is_featured' => 'No',
            ]);
        }
    }
}
