<?php

use Illuminate\Database\Seeder;
use App\Submission;

class SubmissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Submission::create([
        	'agent_name' => 'John Doe',
        	'agency_name' => 'Equity Partners Ins',
        	'agent_email_address' => 'john@ep.com',
        	'agent_phone_number' => '001154585',
        	'ssn' => '08774577',
        	'entity_type' => 'individual',
        	'lob' => 'HO3',
        	'effective_date' => '2019/8/8',
        	'expiration_date' => '2020/8/8',
 			'named_insured' => 'Tom Smit',
 			'additional_ni' => 'Judith Smith',
			'mailing_address_street_name_and_number' => '33 Street Name',
			'mailing_address_city'=> 'New Orleans',
			'mailing_address_county'=> 'NY',
			'mailing_address_zip'          => '254785',
			'mailing_address_state'=> 'LA',
			'location_address_street_name_and_number'=> 'Test Street 33',
			'location_address_city'=> 'New Orleans',
			'location_address_county'=> 'NY',
			'location_address_zip'  => '254785',
			'location_address_state'     => 'LA',       
			'phone_number'=> '001154789',
			'email_address' => 'tom@hotmail.com',       
			'cov_a'=> '129000',
			'other_structures' => '22000',
			'loss_of_use'=> '10000',
			'med_pay' => '5000',
			'aop_ded'=> '2500',
			'construction_type'=> 'frame',
			'protection_class'=> '5',
			'new_purchase'       => 'no',
			'prior_carrier'=> 'yes',
			'prior_carrier_name'=> 'Lloyds of London',
			'prior_carrier_effective_date'=> '2019/8/8',
			'status'=> 'submission',
			'submission_number'=> '000001'
        	        ]);

        Submission::create([
        	'agent_name' => 'Stefan Stefanovic',
        	'agency_name' => 'Lloyds',
        	'agent_email_address' => 'ss@gmail.com',
        	'agent_phone_number' => '785854585',
        	'ssn' => '85968574',
        	'entity_type' => 'individual',
        	'lob' => 'HO3',
        	'effective_date' => '2019/5/5',
        	'expiration_date' => '2020/5/5',
 			'named_insured' => 'Todd Walker',
 			'additional_ni' => 'Cathy Walker',
			'mailing_address_street_name_and_number' => '55 Street Name',
			'mailing_address_city'=> 'New Orleans',
			'mailing_address_county'=> 'NY',
			'mailing_address_zip'          => '564345',
			'mailing_address_state'=> 'LA',
			'location_address_street_name_and_number'=> 'Test Street 77',
			'location_address_city'=> 'New Orleans',
			'location_address_county'=> 'NY',
			'location_address_zip'  => '978767',
			'location_address_state'     => 'LA',       
			'phone_number'=> '236538703',
			'email_address' => 'Todd@hotmail.com',       
			'cov_a'=> '139000',
			'other_structures' => '15000',
			'loss_of_use'=> '8000',
			'med_pay' => '2500',
			'aop_ded'=> '1000',
			'construction_type'=> 'bv',
			'protection_class'=> '1',
			'new_purchase'       => 'no',
			'prior_carrier'=> 'yes',
			'prior_carrier_name'=> 'Lloyds of London',
			'prior_carrier_effective_date'=> '2019/5/5',
			'status'=> 'submission',
			'submission_number'=> '000002'
        	        ]);



    }
}
