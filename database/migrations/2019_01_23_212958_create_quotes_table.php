<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            //general info
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
            $table->string('inspection_contact_name', 50);
            $table->string('inspection_contact_phone_number', 50);
            $table->string('inspection_contact_email_address', 50);
            //agent info
            $table->string('agent_name', 50);
            $table->string('agency_name', 50);
            $table->string('agent_email_address', 50);
            $table->string('agent_phone_number', 50);
            //exposure info
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
            $table->string('zero_two_losses');
            $table->string('more_than_two_losses');
            //risk details
            $table->string('siding', 50);
            $table->string('actual_cash_value', 50);
            $table->string('replacement_cash_value', 50);
            $table->string('home_type', 50); //dwelling, condominium
            $table->string('usage', 50); //primary/rental/secondaty
            $table->string('year built', 50); //should also be used as rating factor
            $table->string('updates_year_roof', 50);
            $table->string('updates_year_hvac', 50);
            $table->string('updates_year_plumbing', 50);
            $table->string('roof_type', 50);
            $table->string('roof_shape', 50);
            $table->string('roof_material', 50);
            $table->string('roof_protections', 50); //shutters//shingle
            $table->string('plumbing_system_condition', 50);
            $table->string('plumbing_system_any_known_leaks', 50);
            $table->string('fuel_tank_storage_on_premises', 50);
            $table->string('swimming_pool_present', 50);
            $table->string('swimming_pool_approved_fence', 50);
            $table->string('swimming_pool_ingorund', 50);
            $table->string('distance_to_coast', 50);
            $table->string('distance_to_fire_station', 50);
            $table->string('distance_to_hydrant', 50);
            //additional_coverage
            $table->string('mold', 50); //should also be used as rating factor
            $table->string('mold_limit', 50);  //should also be used as rating factor
            $table->string('water_back_up', 50);   //should also be used as rating factor
            $table->string('water_back_up_limit', 50);     //should also be used as rating factor
                //in case rw info or premium info is changed, we want to be able to compare it with rw/pricing used as a base for rating
            $table->string('rw_origin');
            $table->string('premium_origin');

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
        Schema::dropIfExists('quotes');
    }
}
