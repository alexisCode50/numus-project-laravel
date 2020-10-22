<?php

use Illuminate\Database\Seeder;
use App\Section;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Section::create([
            'title' => 'Montecristo',
            'size' => '360 x 350',
        ]);

        Section::create([
            'title' => 'Country Club',
            'size' => '750 X 350',
        ]);

        Section::create([
            'title' => 'Temozón',
            'size' => '750 X 350',
        ]);

        Section::create([
            'title' => 'Dzitya',
            'size' => '360 x 350',
        ]);
    }
}
