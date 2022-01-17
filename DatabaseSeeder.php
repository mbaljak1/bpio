<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $manufacturers = [
            ['id' => 1, 'manufacturer_name' => 'Opel'],
            ['id' => 2, 'manufacturer_name' => 'Fiat'],
            ['id' => 3, 'manufacturer_name' => 'Dacia']
        ];

        DB::table('manufacturers')->insert($manufacturers);

        $gears = [
            ['id' => 1, 'gear_type' => 'Automatski'],
            ['id' => 2, 'gear_type' => 'Mehanički'],
            ['id' => 3, 'gear_type' => 'Automatski sekvencijski']
         
        ];

        DB::table('gears')->insert($gears);

        $employees = [
            ['id' => 1, 'first_name' => 'Mario', 'last_name' => 'Baljak', 'phone' => '0915555555', 'email' => 'mario@mario.com'],
            
         
        ];

        DB::table('employees')->insert($employees);

        $clients = [
            ['id' => 1, 'first_name' => 'Mario', 'last_name' => 'Baljak', 'date_of_birth' => '1989-01-18', 'adress' => 'Vukovarska 72', 'town' => 'Petrinja', 'postcode' =>'44250', 'phone' => '0915255555', 'email' => 'mario.mario@mario', 'oib' => '1234567891234', 'driving_license_num' => '12345678' ],
            
         
        ];

        DB::table('clients')->insert($clients);

        $fuel_types = [
            ['id' => 1, 'fuel_type' => 'Benzin'],
            
         
        ];

        DB::table('fuel_types')->insert($fuel_types);

        $vehicles = [
            ['id' => 1, 'vin_number' => '12345678912345678', 'registration_number' => 'SK1986DZ', 'manufacturer_id' => '1', 'model' => 'Astra', 'fuel_type_id' => 1, 'gear_type_id' => 1, 'production_year' => '2020', 'power(kw)' => '88', 'mileage' => '12123', 'number_of_doors' => '5', 'price_per_day'=>'250'],
            
         
        ];
        DB::table('vehicles')->insert($vehicles);

        $rentals = [
            ['id' => 1 , 'client_id' => 1, 'employee_id' => 1, 'vehicle_vin_number' => 1,   'rent_begin' => '2021-12-12', 'rent_end' => '2021-12-14', 'cost' => '500', 'payment_type' => 'gotovina'],
            
         
        ];
        DB::table('rentals')->insert($rentals);
    }
}
