<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('agent_name', 50);
            $table->string('agency_name', 50);

            $table->string('type_of_coverage', 50);
            $table->string('lob', 50);

            $table->string('named_insured', 50);
            $table->string('mailing_address', 50);                                    
            $table->string('location_address', 50);
            $table->string('phone_number', 50);
            $table->string('email_address', 50);
            $table->string('cov_a', 50);
            $table->string('other_structures', 50);            
            $table->string('loss_of_use', 50);
            $table->string('med_pay', 50);                        
            $table->string('aop_ded', 50);
            $table->string('construction_type', 50);
            $table->string('protection_class', 50);
            $table->string('new_purchase', 50)->default(0);            
            $table->string('prior_carrier', 50);
            $table->string('prior_carrier_name', 50);
            $table->string('prior_carrier_effective_date', 50);

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
        Schema::dropIfExists('submissions');
    }
}
