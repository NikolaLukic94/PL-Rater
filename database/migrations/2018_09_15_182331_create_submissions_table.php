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
                //agent info
            $table->string('agent_name', 50);
            $table->string('agency_name', 50);
            $table->string('agent_email_address', 50);
            $table->string('agent_phone_number', 50);
                //coverage info
            $table->string('ssn', 50)->nullable();             
            $table->string('entity_type', 50)->nullable();            
            $table->string('lob', 50);
            $table->date('effective_date');
            $table->date('expiration_date');              
            $table->string('named_insured', 50);  
            $table->string('additional_ni', 50)->nullable();            
            $table->string('mailing_address_street_name_and_number', 50);  
            $table->string('mailing_address_city', 50);   
            $table->string('mailing_address_county', 50); 
            $table->string('mailing_address_zip', 50);               
            $table->string('mailing_address_state', 50);    
            $table->string('location_address_street_name_and_number', 50);  
            $table->string('location_address_city', 50);   
            $table->string('location_address_county', 50); 
            $table->string('location_address_zip', 50);               
            $table->string('location_address_state', 50);                            
            $table->string('phone_number', 50);
            $table->string('email_address', 50);                              
                //building info
            $table->string('cov_a', 50);
            $table->string('other_structures', 50);            
            $table->string('loss_of_use', 50);
            $table->string('med_pay', 50);                        
            $table->string('aop_ded', 50);
            $table->string('construction_type', 50);
            $table->string('protection_class', 50);
            $table->string('new_purchase', 50)->default(0);            
            $table->string('prior_carrier', 50)->nullable();
            $table->string('prior_carrier_name', 50)->nullable();
            $table->date('prior_carrier_effective_date', 50)->nullable();

            $table->string('status');
            $table->integer('submission_number');                

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
