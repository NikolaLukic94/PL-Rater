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
            $table->double('general_rate', 5, 3);
            $table->string('lob');
            $table->double('cov_a', 5, 3);
            $table->double('other_structures', 5, 3);
            $table->double('loss_of_use', 5, 3);
            $table->double('med_pay_1k', 5, 3);
            $table->double('med_pay_2_5k', 5, 3);
            $table->double('med_pay_5k', 5, 3);
            $table->double('aop_ded_1', 5, 3);
            $table->double('aop_ded_2', 5, 3);
            $table->double('aop_ded_3', 5, 3);
            $table->double('aop_ded_4', 5, 3);
            $table->double('aop_ded_5', 5, 3);
            $table->double('frame', 5, 3);
            $table->double('jm', 5, 3);
            $table->double('bv', 5, 3);
            $table->double('masonry', 5, 3);
            $table->double('protection_class_1', 5, 3);
            $table->double('protection_class_2', 5, 3);
            $table->double('protection_class_3', 5, 3);
            $table->double('protection_class_4', 5, 3);
            $table->double('protection_class_5', 5, 3);

            $table->double('new_purchase', 5, 3);
            $table->double('prior_carrier', 5, 3);
            $table->double('prior_carrier_name', 5, 3);
            $table->double('zero_two_losses', 5, 3);
            $table->double('more_than_two_losses', 5, 3);

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
