<?php

use Illuminate\Database\Seeder;
use App\Property;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Property::truncate();

        $faker = \Faker\Factory::create();

        Property::create([
            'unique_key' => 'key1',
            'title' => 'Lujosa Casa en Montecristo con Paneles Solares',
            'direction' => ' Calle 24 x 4 y 6, Montecristo',
            'location_id' => 1,
            'description' => $faker->paragraph,
            'type_property' => 'Casa',
            'price' => 7000000, 
            'state_property' => 'Venta',
            'size_property' => '512m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1,
            'map' => $faker->paragraph,
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo7.pjg',
        ]);

        Property::create([
            'unique_key' => 'key2',
            'title' => 'Villas en San Bruno ',
            'direction' => 'Calle 2 x 10 y 12, Uaymitun',
            'location_id' => 1,
            'description' => $faker->paragraph,
            'type_property' => 'Departamento',
            'price' => 7950000,
            'state_property' => 'Venta',
            'size_property' => '250m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'map' => $faker->paragraph,
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo6.pjg',
        ]);

        Property::create([
            'unique_key' => 'key3',
            'title' => 'Villas en San Bruno ',
            'direction' => 'Calle 2 x 10 y 12, Uaymitun',
            'location_id' => 1,
            'description' => $faker->paragraph,
            'type_property' => 'Casa',
            'price' => 7950000,
            'state_property' => 'Venta',
            'size_property' => '260m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'map' => $faker->paragraph,
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo5.pjg',
        ]);

        Property::create([
            'unique_key' => 'key4',
            'title' => 'Casa en Colonia Mexico',
            'direction' => 'Calle 25 entre 2 y 14, Colonia México',
            'location_id' => 1,
            'description' => $faker->paragraph,
            'type_property' => 'Casa',
            'price' => 3850000,
            'state_property' => 'Venta',
            'size_property' => '',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'map' => $faker->paragraph,
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo4.pjg',
        ]);


        Property::create([
            'unique_key' => 'key5',
            'title' => 'Townhouse en Montes de Ame',
            'direction' => 'Calle 25 entre 2 y 14, Montes de Ame',
            'location_id' => 1,
            'description' => $faker->paragraph,
            'type_property' => 'Townhouse',
            'price' => 12000,
            'state_property' => 'Renta',
            'size_property' => '126m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'map' => $faker->paragraph,
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo3.pjg',
        ]);

        Property::create([
            'unique_key' => 'key6',
            'title' => 'Casa en Mirova, Dzitya Test',
            'direction' => 'Calle 25 entre 2 y 14, Dzitya',
            'location_id' => 1,
            'description' => $faker->paragraph,
            'type_property' => 'Casa',
            'price' => 3600000,
            'state_property' => 'Venta',
            'size_property' => '512m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'map' => $faker->paragraph,
            'amenities' => $faker->paragraph,
            'profile_picture' => 'FACHADA_PRINCIPAL_LLUVIA.jpg',
        ]);

        Property::create([
            'unique_key' => 'key7',
            'title' => 'Casa en Mirova, Dzitya',
            'direction' => 'Calle 25 entre 2 y 14, Dzitya',
            'location_id' => 1,
            'description' => $faker->paragraph,
            'type_property' => 'Casa',
            'price' => 3700000,
            'state_property' => 'Venta',
            'size_property' => '512m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'map' => $faker->paragraph,
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo1.pjg',
        ]);


    }
}
