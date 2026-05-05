<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishSeeder extends Seeder
{
    public function run()
    {
        DB::table('dishes')->insert([
            [
                'id' => 1,
                'name' => 'Bánh canh',
                'price' => 25000,
                'description' => 'Món ăn thơm ngon, phù hợp cho bữa ăn căn tin',
                'created_at' => '2026-03-25 09:37:38',
                'updated_at' => '2026-03-25 09:37:38',
                'image' => 'banhcanh.jpg',
                'category_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Bánh mỳ',
                'price' => 15000,
                'description' => 'Bên ngoài giòn, bên trong nhiều thịt',
                'created_at' => '2026-03-25 09:37:38',
                'updated_at' => '2026-03-25 09:37:38',
                'image' => 'banhmy.jpg',
                'category_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Bánh căn',
                'price' => 25000,
                'description' => 'Giòn bên ngoài, mềm bên trong',
                'created_at' => '2026-03-25 09:37:38',
                'updated_at' => '2026-03-25 09:37:38',
                'image' => 'banhcan.jpg',
                'category_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Bò kho',
                'price' => 30000,
                'description' => 'Nóng hổi, đậm vị, dễ ăn',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'bokho.jpg',
                'category_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Bánh xèo',
                'price' => 30000,
                'description' => 'Vỏ giòn, nhân đầy đặn',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'banhxeo.jpg',
                'category_id' => 1
            ],
            [
                'id' => 6,
                'name' => 'Bánh ướt',
                'price' => 25000,
                'description' => 'Bánh mỏng, mịn màng và có độ dai nhẹ',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'banhuot.jpg',
                'category_id' => 1
            ],
            [
                'id' => 7,
                'name' => 'Cơm chiên',
                'price' => 25000,
                'description' => 'Giòn giòn, béo béo',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'comchien.jpg',
                'category_id' => 1
            ],
            [
                'id' => 8,
                'name' => 'Bún bò',
                'price' => 30000,
                'description' => 'nước dùng đậm vị, sợi bún dai ngon',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'bunbo.jpg',
                'category_id' => 1
            ],
            [
                'id' => 9,
                'name' => 'Bánh mỳ nướng',
                'price' => 20000,
                'description' => 'Vỏ ngoài giòn rụm, ruột xốp mềm',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'banhmynuong.jpg',
                'category_id' => 2
            ],
            [
                'id' => 10,
                'name' => 'Xiên chiên',
                'price' => 20000,
                'description' => 'Đa dạng topping',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'xienchien.jpg',
                'category_id' => 2
            ],
            [
                'id' => 11,
                'name' => 'Mỳ ý',
                'price' => 25000,
                'description' => 'sợi dài, tròn nhỏ, sốt đậm đà',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'myy.jpg',
                'category_id' => 2
            ],
            [
                'id' => 12,
                'name' => 'Pizza',
                'price' => 60000,
                'description' => 'Vỏ mỏng,nhiều phô mai',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'pizza.jpg',
                'category_id' => 2
            ],
            [
                'id' => 13,
                'name' => 'Bánh tráng trộn',
                'price' => 15000,
                'description' => 'Hương vị chua, cay, mặn, ngọt hài hòa, đậm đà',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'banhtrangtron.jpg',
                'category_id' => 2
            ],
            [
                'id' => 14,
                'name' => 'Hotdog',
                'price' => 30000,
                'description' => 'Vỏ ngoài giòn rụm, phô mai kéo sợi',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'hotdog.jpg',
                'category_id' => 2
            ],
            [
                'id' => 15,
                'name' => 'Gà đút lò',
                'price' => 30000,
                'description' => 'Hương vị đậm đà, thịt mềm tan trong miệng',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'gadutlo.jpg',
                'category_id' => 2
            ],
            [
                'id' => 16,
                'name' => 'Bánh gạo cay',
                'price' => 30000,
                'description' => 'Thỏi bánh gạo trắng, dẻo dai, sốt tương ớt đỏ rực, cay nồng và ngọt nhẹ',
                'created_at' => null,
                'updated_at' => null,
                'image' => 'banhgaocay.jpg',
                'category_id' => 2
            ],
            [
                'id' => 17,
                'name' => 'Pessi',
                'price' => 10000,
                'description' => null,
                'created_at' => null,
                'updated_at' => null,
                'image' => 'pessi.jpg',
                'category_id' => 3
            ],
            [
                'id' => 18,
                'name' => '7 up',
                'price' => 10000,
                'description' => null,
                'created_at' => null,
                'updated_at' => null,
                'image' => '7up.jpg',
                'category_id' => 3
            ],
            [
                'id' => 19,
                'name' => 'Trà ô long',
                'price' => 10000,
                'description' => null,
                'created_at' => null,
                'updated_at' => null,
                'image' => 'traolong.jpg',
                'category_id' => 3
            ],
            [
                'id' => 20,
                'name' => 'Sting',
                'price' => 10000,
                'description' => null,
                'created_at' => null,
                'updated_at' => null,
                'image' => 'sting.jpg',
                'category_id' => 3
            ],
        ]);
    }
}