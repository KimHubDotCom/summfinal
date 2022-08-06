<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Bike;
use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bikes = [
            [
                'model_name' => 'Honda CB1000R', 
                'rpm' => '9500', 
                'price' => 'Php800,000,00', 
                'color' => 'Black', 
            ],

            [
                'model_name' => 'BMW G 310R', 
                'rpm' => '7500', 
                'price' => 'Php400,000,00', 
                'color' => 'Blue', 
            ],

            [
                'model_name' => 'BMW R 1200 GS', 
                'rpm' => '9000', 
                'price' => 'Php400,000,00', 
                'color' => 'Grey', 
            ],

            [
                'model_name' => 'BMW F800 R', 
                'rpm' => '9006', 
                'price' => 'Php755,000,00', 
                'color' => 'Red', 
            ],
           
        ];
        foreach($bikes as $b){
            Bike::create($b);
        }
    }
}
