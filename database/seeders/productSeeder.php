<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("products")->insert([[
            'name'=> "Fridge",
            'price'=> "599",
            'category'=> 'Fridge',
            'description'=> "This is a Fridge",
            'gallery'=> "https://www.shutterstock.com/image-photo/top-mount-fridge-isolated-on-260nw-1306270882.jpg"

        ],
        [
            'name'=> "Mobile",
            'price'=> "299",
            'category'=> 'Mobile',
            'description'=> "This is a mobile",
            'gallery'=> "https://media.istockphoto.com/id/1309147753/vector/realistic-mobile-phone-mockup-template-isolated-stock-vector.jpg?s=612x612&w=0&k=20&c=llG65plOEQMKpWq0e04XRls2mufZa3mhh-pEnz5iGbU="

        ],
        [
            'name'=> "Laptop",
            'price'=> "349",
            'category'=> 'Laptop',
            'description'=> "This is a Laptop",
            'gallery'=> "https://www.paklap.pk/pub/media/catalog/product/cache/7e76858baa02afd4bb6d466a87d0383e/q/_/q_1.png"
        ]]);
    }
}
