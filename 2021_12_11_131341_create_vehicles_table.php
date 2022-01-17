<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('vin_number',17);
            $table->char('registration_number',10);
            $table->foreignId('manufacturer_id')->constrained('manufacturers');
            $table->string('model',50);
            $table->foreignId('fuel_type_id')->constrained('fuel_types');
            $table->foreignId('gear_type_id')->constrained('gears');
            
            $table->integer('production_year')->nullable();
            $table->integer('power(kw)')->nullable();
            $table->integer('mileage')->nullable();
            $table->integer('number_of_doors');
            $table->decimal('price_per_day');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
