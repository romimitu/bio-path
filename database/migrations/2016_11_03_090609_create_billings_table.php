<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('regno');
            $table->string('receipt');
            $table->string('name');            
            $table->string('father');            
            $table->string('country');            
            $table->string('passport')->unique();            
            $table->string('recrutoffice');            
            $table->string('recrutingcontact');            
            $table->string('medicaldate');            
            $table->string('slipdate');            
            $table->string('expirydate');            
            $table->string('reportdate');            
            $table->string('reporttime');            
            $table->string('medicalfee');            
            $table->string('password');            
            $table->string('remarks');            
            $table->string('image');
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
        Schema::dropIfExists('billings');
    }
}
