<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatBillingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->increments('receipt');            
            $table->string('name');            
            $table->string('father');            
            $table->string('country');            
            $table->string('passport')->unique();            
            $table->string('recrutoffice');            
            $table->string('recrutingcontact');            
            $table->string('medicaldate');            
            $table->string('reportdate');            
            $table->string('reporttime');            
            $table->string('medicalfee');            
            $table->string('password');            
            $table->string('remarks');            
            $table->string('filePath');
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
        Schema::dropIfExists('billing');
    }
}
