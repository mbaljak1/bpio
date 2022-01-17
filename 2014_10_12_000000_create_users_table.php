<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 30);
            $table->string('last_name',30);
            $table->date('date_of_birth')->nullable();
            $table->string('adress',255);
            $table->string('town',50);
            $table->string('postcode',10);
            $table->string('phone',15);
            $table->string('email',50)->nullable();
            $table->string('oib',13);
            $table->string('driving_license_num',8)->nullable();
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
        Schema::dropIfExists('users');
    }
}
