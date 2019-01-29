<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lob', 50);
            $table->string('cov_a', 50);
            $table->string('other_structures', 50)->nullable();            
            $table->string('loss_of_use', 50)->nullable();       
            $table->string('med_pay', 50)->nullable();                             
            $table->string('aop_ded', 50)->nullable();       
            $table->string('construction_type', 50);
            $table->string('protection_class', 50);
            $table->string('new_purchase', 50)->default(0)->nullable();                  
            $table->string('prior_carrier', 50)->nullable()->nullable();       
            $table->string('prior_carrier_name', 50)->nullable()->nullable();           
            $table->unsignedInteger('file_id');
            $table->foreign('file_id')->references('id')->on('files');
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
        Schema::dropIfExists('raters');
    }
}
