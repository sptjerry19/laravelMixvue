<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'màn hình máy tính GIGABYTE',
            'image' => asset('images/image2.jpg'),
            'description' => 'đây là màn hình có tần số 100hz tốc độ phản hồi 1ms, là màn hình có độ sáng tốt cho người dùng',
            'star' => 5,
            'Evaluate' => 450,
            'sold' => 1800,
            'discount' => 30,
            'price' => 15000000,
            'Classify' => 'màn hình 27"',
            'size' => null,
            'views' => 100,
        ]);
    }
}
