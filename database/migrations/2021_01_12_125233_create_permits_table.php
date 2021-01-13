<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('permit_unit_id');
            $table->string('permit_number', 50);
            $table->string('name_of_vessel');
            $table->string('port_of_registry', 50)->nullable();
            $table->string('gross_tonnage', 20)->nullable();
            $table->string('imo_number', 20)->nullable();
            $table->string('call_sign', 20)->nullable();
            $table->date('date_of_issue');
            $table->date('date_of_expiry');
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('Cascade');
            $table->foreign('permit_unit_id')->references('id')->on('permit_units')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permits');
    }
}
