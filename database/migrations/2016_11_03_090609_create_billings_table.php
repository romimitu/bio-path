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
            $table->string('mobile');            
            $table->string('birthday');            
            $table->string('father');            
            $table->string('mother');            
            $table->string('country');
            $table->string('gender');
            $table->string('maritial_status');
            $table->string('passport')->unique();            
            $table->string('recrutoffice');            
            $table->string('recrutingcontact');            
            $table->string('nationality');            
            $table->string('slipdate');            
            $table->string('gcc_slipdate');            
            $table->string('gcc_expirydate');            
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
