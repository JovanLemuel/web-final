<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fakerID = Factory::create('id_ID');
        $fakerFR = Factory::create('fr_FR');
        $fakerIT = Factory::create('it_IT');
        $fakerRU = Factory::create('ru_RU');
        $fakerUS = Factory::create('en_US');
    }
}
