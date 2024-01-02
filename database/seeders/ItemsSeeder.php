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
            ['item' => 'Whole Day Pass', 'amount' => 500],
            ['item' => 'Whole Day Pass(Student)', 'amount' => 400],
            ['item' => 'Monthly Pass', 'amount' => 3000],
            ['item' => '8-Hour Pass', 'amount' => 400],
            ['item' => '5-Hour Pass', 'amount' => 300],
            ['item' => '1-Hour Pass', 'amount' => 75],
            ['item' => '8-Hour Pass(Student)', 'amount' => 320],
            ['item' => '5-Hour Pass(Student)', 'amount' => 240],
            ['item' => '1-Hour Pass(Student)', 'amount' => 60],
            ['item' => 'Strawberries and Cream', 'amount' => 75],
            ['item' => 'Matcha Latte', 'amount' => 75],
            ['item' => 'Spanish Latte', 'amount' => 55],
            ['item' => 'Caramel Latte', 'amount' => 65],
            ['item' => 'White Mocha Latte', 'amount' => 65],
            ['item' => 'Vanilla Latte', 'amount' => 55],
            ['item' => 'Cafe Latte', 'amount' => 45],
            ['item' => 'Mocha Latte', 'amount' => 55],
        ];

        foreach($items as $item) {
            \App\Models\Item::create([
                'name' => $item['item'],
                'amount' => $item['amount'],
            ]);
        }
    }
}
