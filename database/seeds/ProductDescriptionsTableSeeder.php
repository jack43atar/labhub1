<?php

use Illuminate\Database\Seeder;

class ProductDescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ProductDescription::class)->create([
            'name' => 'Battery Powered Product',
        ]);
        factory(\App\ProductDescription::class)->create([
            'name' => 'AC / DC External Power Source',
        ]);
        factory(\App\ProductDescription::class)->create([
            'name' => 'Home Use Product',
        ]);
        factory(\App\ProductDescription::class)->create([
            'name' => 'Non - Home Use Product',
        ]);
        factory(\App\ProductDescription::class)->create([
            'name' => 'Handheld Product',
        ]);
        factory(\App\ProductDescription::class)->create([
            'name' => 'Desktop Mounted Product',
        ]);
        factory(\App\ProductDescription::class)->create([
            'name' => 'floor Mounted Product',
        ]);
        factory(\App\ProductDescription::class)->create([
            'name' => 'wall or ceiling Mounted Product',
        ]);
    }
}
