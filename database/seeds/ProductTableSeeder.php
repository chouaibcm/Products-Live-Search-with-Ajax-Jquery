<?php

use App\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Product::class, 10)->create();
        $faker = Faker::create();
        
        $a = 1;

        while ($a <= 10) {
            Product::create([
                'title' => $faker->sentence(7,true),
                'price' =>  rand(1000,3000),
                'image' =>  'product-'.$a.'.jpg',
            ]);
            $a++;
        }
    }
}
