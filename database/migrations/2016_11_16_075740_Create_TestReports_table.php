<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testreports', function (Blueprint $table) {
            $table->increments('id');     
            $table->integer('billing_id')->unsigned();
            $table->foreign('billing_id')->references('id')->on('billings')->onDelete('cascade');
            $table->string('gcccode');
            $table->string('gccslipno');
            $table->string('height');
            $table->string('weight');
            $table->string('profession');
            $table->string('visano');
            $table->string('visadate');
            $table->string('mofano');
            $table->string('eye');
            $table->string('commet');
            $table->string('ear');
            $table->string('bp');
            $table->string('heart');
            $table->string('lungs');
            $table->string('chestxray');
            $table->string('abdomen');
            $table->string('herina');
            $table->string('varicoseveins');
            $table->string('extremities');
            $table->string('deformities');
            $table->string('skin');
            $table->string('venerealdiseases');
            $table->string('cns');
            $table->string('psychiatry');
            $table->string('sugar');
            $table->string('albumin');
            $table->string('bilharziasis');
            $table->string('helminthes');
            $table->string('giardia');
            $table->string('bilharziasisculture');
            $table->string('salmonella');
            $table->string('cholera');
            $table->string('bloodgroup');
            $table->string('haemoglobin');
            $table->string('thickfilmfor');
            $table->string('malaria');
            $table->string('microfilaria');
            $table->string('remarks');
            $table->string('rbs');
            $table->string('lfts');
            $table->string('creatinine');
            $table->string('hiv');
            $table->string('hbsag');
            $table->string('antihcv');
            $table->string('vdrl');
            $table->string('tpha');
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
        Schema::dropIfExists('testreports');
    }
}
