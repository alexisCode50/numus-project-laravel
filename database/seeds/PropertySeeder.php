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
            'title' => 'Lujosa Casa en Montecristo con Paneles Solares',
            'direction' => ' Calle 24 x 4 y 6, Montecristo',
            'location' => 'Montecristo',
            'description' => $faker->paragraph,
            'type_property' => 'Casa',
            'price' => 7000000, 
            'state_property' => 'Venta',
            'size_property' => '512m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1,
            'latitude_map' => '48° 51’ 12’’ N',
            'longitude_map' => '02° 20’ 56’’ E',
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo7.pjg',
        ]);

        Property::create([
            'title' => 'Villas en San Bruno ',
            'direction' => 'Calle 2 x 10 y 12, Uaymitun',
            'location' => 'Dzitya',
            'description' => $faker->paragraph,
            'type_property' => 'Departamento',
            'price' => 7950000,
            'state_property' => 'Venta',
            'size_property' => '250m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'latitude_map' => '52° 31’ 28’’ N',
            'longitude_map' => '13° 24’ 38’’ E',
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo6.pjg',
        ]);

        Property::create([
            'title' => 'Villas en San Bruno ',
            'direction' => 'Calle 2 x 10 y 12, Uaymitun',
            'location' => 'Dzitya',
            'description' => $faker->paragraph,
            'type_property' => 'Casa',
            'price' => 7950000,
            'state_property' => 'Venta',
            'size_property' => '260m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'latitude_map' => '52° 31’ 28’’ N',
            'longitude_map' => '13° 24’ 38’’ E',
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo5.pjg',
        ]);

        Property::create([
            'title' => 'Casa en Colonia Mexico',
            'direction' => 'Calle 25 entre 2 y 14, Colonia México',
            'location' => 'Colonia Mexico',
            'description' => $faker->paragraph,
            'type_property' => 'Casa',
            'price' => 3850000,
            'state_property' => 'Venta',
            'size_property' => '',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'latitude_map' => '52° 31’ 28’’ N',
            'longitude_map' => '13° 24’ 38’’ E',
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo4.pjg',
        ]);


        Property::create([
            'title' => 'Townhouse en Montes de Ame',
            'direction' => 'Calle 25 entre 2 y 14, Montes de Ame',
            'location' => 'Montes de Ame',
            'description' => $faker->paragraph,
            'type_property' => 'Townhouse',
            'price' => 12000,
            'state_property' => 'Renta',
            'size_property' => '126m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'latitude_map' => '52° 31’ 28’’ N',
            'longitude_map' => '13° 24’ 38’’ E',
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo3.pjg',
        ]);

        Property::create([
            'title' => 'Casa en Mirova, Dzitya Test',
            'direction' => 'Calle 25 entre 2 y 14, Dzitya',
            'location' => 'Dzitya',
            'description' => $faker->paragraph,
            'type_property' => 'Casa',
            'price' => 3600000,
            'state_property' => 'Venta',
            'size_property' => '512m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'latitude_map' => '52° 31’ 28’’ N',
            'longitude_map' => '13° 24’ 38’’ E',
            'amenities' => $faker->paragraph,
            'profile_picture' => 'FACHADA_PRINCIPAL_LLUVIA.jpg',
        ]);

        Property::create([
            'title' => 'Casa en Mirova, Dzitya',
            'direction' => 'Calle 25 entre 2 y 14, Dzitya',
            'location' => 'Dzitya',
            'description' => $faker->paragraph,
            'type_property' => 'Casa',
            'price' => 3700000,
            'state_property' => 'Venta',
            'size_property' => '512m2',
            'bedroom' => 4.0,
            'bathroom' => 2.5,
            'garage' => 1.0,
            'latitude_map' => '52° 31’ 28’’ N',
            'longitude_map' => '13° 24’ 38’’ E',
            'amenities' => $faker->paragraph,
            'profile_picture' => 'ejemplo1.pjg',
        ]);


    }
}
