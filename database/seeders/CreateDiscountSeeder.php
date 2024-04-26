<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Discount;

class CreateDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = [
            [
               'name'=>'Basic',
               'percentage'=>2,
               'status'=>0,
            ],
            [
                'name'=>'Pro',
                'percentage'=>5,
                'status'=>0,
             ],
             [
                'name'=>'Premium',
                'percentage'=>10,
                'status'=>0,
             ],


        ];

        foreach ($item as $key => $items) {
            Discount::create($items);
        }
    }
}
