<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		// $faker = \Faker\Factory::create();
		// for($i = 0; $i < 50; $i++){
		//     Books::create([
		//         'name' => $faker->sentence,
		//         'author' => $faker->name,
		//         'publish_date' => $faker->date,
		//     ]);
		// }


		Products::create([
			'id' => 'p1',
			'image' => 'mocha-overcoat',
			'title' => 'Majestic Vintage Mocha Overcoat',
			'price' => 129.99,
			'description' => 'Channel timeless sophistication with this stunning mocha overcoat. Crafted for the discerning gentleman who appreciates the fine blend of vintage charm and modern elegance.'
		]);

		Products::create([
			'id' => 'p2',
			'image' => 'dream-gown',
			'title' => 'Enchanting Blush Dream Gown',
			'price' => 189.99,
			'description' => 'Bask in the glow of elegance with our Enchanting Blush Dream Gown. Embody the regality of a queen with a sweet touch of pink that whispers enchantment. This is the perfect piece for those seeking to create unforgettable moments.'
		]);

		Products::create([
			'id' => 'p3',
			'image' => 'rain-jacket',
			'title' => 'Vintage Sunshine Rain Jacket',
			'price' => 49.99,
			'description' => 'Brace the showers in style! Our Vintage Sunshine Rain Jacket ensures that you stand out, even in the dullest weather. Because rain is never a reason to compromise on your fashion quotient.'
		]);
		Products::create([
			'id' => 'p4',
			'image' => 'merlot-suit',
			'title' => 'Classic Merlot Business Suit',
			'price' => 249.99,
			'description' => 'Step into the boardroom with unmatched confidence in our Classic Merlot Business Suit. Exuding an air of refined class and understated power, it is ideal for the modern executive who values tradition and elegance.'
		]);

		Products::create([
			'id' => 'p5',
			'image' => 'moonlight-dress',
			'title' => 'Ethereal Moonlight Evening Dress',
			'price' => 159.99,
			'description' => 'Sweep the room off its feet in our Ethereal Moonlight Evening Dress. Crafted to mimic the allure of the moonlight, this dress is a nod to those who appreciate subtle glamour and a standout silhouette.'
		]);

		Products::create([
			'id' => 'p6',
			'image' => 'denim-pioneer',
			'title' => 'Pioneer Rugged Denim Jacket',
			'price' => 79.99,
			'description' => 'Our Pioneer Rugged Denim Jacket is a tribute to those who embody the spirit of adventure. Designed with durability and comfort in mind, this jacket is a wardrobe essential for the urban explorer.'

		]);
	}
}
