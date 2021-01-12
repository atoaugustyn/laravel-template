<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVesselsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vessels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('vessel_type', 50)->nullable();
            $table->string('flag', 100)->nullable();
            $table->string('port_of_registration', 150)->nullable();
            $table->string('gross_tonnage', 20)->nullable();
            $table->string('call_sign', 20)->nullable();
            $table->string('name_address_owner', 150)->nullable();
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
        Schema::dropIfExists('vessels');
    }
}
