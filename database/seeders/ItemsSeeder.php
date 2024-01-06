<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            ['type' => 'pass', 'item' => 'Whole Day Pass', 'amount' => 500],
            ['type' => 'pass', 'item' => 'Whole Day Pass(Student)', 'amount' => 400],
            ['type' => 'pass', 'item' => 'Monthly Pass', 'amount' => 3000],
            ['type' => 'pass', 'item' => '8-Hour Pass', 'amount' => 400],
            ['type' => 'pass', 'item' => '5-Hour Pass', 'amount' => 300],
            ['type' => 'pass', 'item' => '1-Hour Pass', 'amount' => 75],
            ['type' => 'pass', 'item' => '8-Hour Pass(Student)', 'amount' => 320],
            ['type' => 'pass', 'item' => '5-Hour Pass(Student)', 'amount' => 240],
            ['type' => 'pass', 'item' => '1-Hour Pass(Student)', 'amount' => 60],
            ['type' => 'menu', 'item' => 'Strawberries and Cream', 'amount' => 75],
            ['type' => 'menu', 'item' => 'Matcha Latte', 'amount' => 75],
            ['type' => 'menu', 'item' => 'Spanish Latte', 'amount' => 55],
            ['type' => 'menu', 'item' => 'Caramel Latte', 'amount' => 65],
            ['type' => 'menu', 'item' => 'White Mocha Latte', 'amount' => 65],
            ['type' => 'menu', 'item' => 'Vanilla Latte', 'amount' => 55],
            ['type' => 'menu', 'item' => 'Cafe Latte', 'amount' => 45],
            ['type' => 'menu', 'item' => 'Mocha Latte', 'amount' => 55],
        ];

        foreach($items as $item) {
            \App\Models\Item::create([
                'type' => $item['type'],
                'name' => $item['item'],
                'amount' => $item['amount'],
            ]);
        }
    }
}
