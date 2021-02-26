<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'macbook pro',
                'price' => '2300',
                'category' => 'laptop',
                'description' => 'Apple MacBook Pro is a macOS laptop with a 13.30-inch 2560x1600 pixels',
                'gallery' => 'https://s3.envato.com/files/213607302/Preview%20Image%20Set/MacBook%20Pro%20Silver%2013%20inch-1.jpg',
            ],
            [
                'name' => 'iphone pro',
                'price' => '1200',
                'category' => 'mobile',
                'description' => 'The iPhone is a smartphone made by Apple that combines a computer',
                'gallery' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-12-family-select-2020?wid=940&amp;hei=1112&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1604343709000',
            ],
            [
                'name' => 'headset',
                'price' => '50',
                'category' => 'sound',
                'description' => 'A headset is a hardware device that connects to a telephone or computer',
                'gallery' => 'https://cdn.techterms.com/img/lg/headphones_1260-2.jpg',
            ]
        ]);
    }
}
