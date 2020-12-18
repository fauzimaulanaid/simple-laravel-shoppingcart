<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Li-Ning Badminton G Force Power 1900i+',
                'photo_url' => 'https://p.ipricegroup.com/a6f7b668671e18f29a95040603413ca0f2736822_0.jpg',
                'price' => 380000,
                'description' => 'Type : lining G-force power 1900i, Material : Full Carbone, Flex : Medium, Balance : 283, Weight : 85 +2gr, Size Grip : 3u/g5, High Tension : 28-30Lbs.',
            ],
            [
                'name' => 'YONEX ASTROX 9',
                'photo_url' => 'https://p.ipricegroup.com/efd5b0b95a15704fbc7c73f2b7bde6e1da0e9dc6_0.jpg',
                'price' => 1225000,
                'description' => 'Spec: 4u/G520-28lbs, Made in Taiwan',
            ],
            [
                'name' => 'YONEX NANORAY 7',
                'photo_url' => 'https://p.ipricegroup.com/8f569512969909dec19b38ef6e82a25ad31e0733_0.jpg',
                'price' => 499000,
                'description' => 'Type: 4UG5, Length: 670mm, Balance: 292++mm, Tension Recommend: 28 lbs',
            ],
			[
                'name' => 'YONEX Badminton Japan Tour Series Frame 9900',
                'photo_url' => 'https://p.ipricegroup.com/270b0b03f0e517946a5df65834c6a558c3dc61b8_0.jpg',
                'price' => 939000,
                'description' => 'YONEX Japan Tour Series Badminton Frame [NR Tour 9900] is a badminton racket made from H.M Graphite which is designed sporty, lightweight and strong. Ideal for beginners and professionals alike.',
            ]
        ];

        DB::table('products')->insert($products);
    }
}
