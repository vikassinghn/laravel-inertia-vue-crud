<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
        ['name' => 'Wireless Mouse', 'price' => 25.99, 'description' => 'Ergonomic mouse', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'Mechanical Keyboard', 'price' => 89.50, 'description' => 'RGB backlit', 'created_at' => now(), 'updated_at' => now()],
        ['name' => 'UltraWide Monitor', 'price' => 349.99, 'description' => '34-inch curved display', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Noise Cancelling Headphones', 'price' => 199.00, 'description' => 'Over-ear wireless audio', 'created_at' => now(), 'updated_at' => now()],
['name' => 'HD Webcam', 'price' => 59.95, 'description' => '1080p with dual microphones', 'created_at' => now(), 'updated_at' => now()],
['name' => 'USB-C Docking Station', 'price' => 120.00, 'description' => 'Dual monitor support with PD', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Gaming Chair', 'price' => 215.50, 'description' => 'Lumbar support and reclining', 'created_at' => now(), 'updated_at' => now()],
['name' => 'External SSD 1TB', 'price' => 110.00, 'description' => 'High-speed portable storage', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Laptop Stand', 'price' => 35.00, 'description' => 'Aluminum adjustable height', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Bluetooth Speaker', 'price' => 45.99, 'description' => 'Water-resistant portable sound', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Wireless Charger', 'price' => 29.99, 'description' => '15W fast charging pad', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Microphone Arm', 'price' => 42.00, 'description' => 'Desk-mounted boom arm', 'created_at' => now(), 'updated_at' => now()],
['name' => 'LED Desk Lamp', 'price' => 38.50, 'description' => 'Dimmable with USB port', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Graphic Tablet', 'price' => 150.00, 'description' => 'Pressure sensitive with stylus', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Smartwatch', 'price' => 249.00, 'description' => 'Fitness and sleep tracking', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Cable Management Kit', 'price' => 15.99, 'description' => 'Sleeves and clips bundle', 'created_at' => now(), 'updated_at' => now()],
['name' => 'Ethernet Adapter', 'price' => 19.50, 'description' => 'Gigabit USB-A to RJ45', 'created_at' => now(), 'updated_at' => now()],
         ]);
    }
}
