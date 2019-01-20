<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lob');                           
            $table->integer('cov_a');
            $table->integer('other_structures');            
            $table->integer('loss_of_use');
            $table->integer('med_pay_1k');    
            $table->integer('med_pay_2_5k');  
            $table->integer('med_pay_5k');  
            $table->integer('aop_ded_1');
            $table->integer('aop_ded_2');
            $table->integer('aop_ded_3');
            $table->integer('aop_ded_4');             
            $table->integer('aop_ded_5');
            $table->integer('frame');
            $table->integer('jm');
            $table->integer('bv');
            $table->integer('masonry');            
            $table->integer('protection_class_1');
            $table->integer('protection_class_2');
            $table->integer('protection_class_3');
            $table->integer('protection_class_4');
            $table->integer('protection_class_5');                                                
            $table->integer('new_purchase');            
            $table->integer('prior_carrier');
            $table->integer('prior_carrier_name');
            $table->integer('zero_two_losses');
            $table->integer('more_than_two_losses');
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
        Schema::dropIfExists('rates');
    }
}
