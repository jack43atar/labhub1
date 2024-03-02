<?php

use Illuminate\Database\Seeder;

class ServicePreferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\ServicePreference::class)->create([
            'name' => 'TEST',
        ]);

        factory(\App\ServicePreference::class)->create([
            'name' => 'EMISSION TEST - Unintentional Radiators',
        ]);

        factory(\App\ServicePreference::class)->create([
            'name' => 'EMISSION TEST - Intentional Radiators',
        ]);

        factory(\App\ServicePreference::class)->create([
            'name' => 'EMISSION TEST - Spread Spectrum Transmitter (DSS)',
        ]);

        factory(\App\ServicePreference::class)->create([
            'name' => 'EMISSION TEST - Intentional Radiators',
        ]);
    }
}
