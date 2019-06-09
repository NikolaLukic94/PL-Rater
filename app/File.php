<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class File extends Model
{
        use Traits\RecordsActivity;

        protected $guarded = [];     


        protected static function boot()
        {
            parent::boot();

            static::creating(function ($model)  {

                $submission = $file->submission()->first();
                dd($submission);

                $model->agent_name = $submission->agent_name;
                $model->agency_name = $submission->agency_name;
                $model->agent_email_address = $submission->agent_email_address; 
                $model->agent_phone_number = $submission->agent_phone_number; 
                $model->agent_name = $submission->agent_name; 

                $model->lob = $submission->lob;
                $model->effective_date = $submission->effective_date;
                // need set to have either req for input or info from subs
                $model->expiration_date = $submission->effective_date;
                $model->agent_phone_number = $submission->agent_phone_number;
                $model->agent_name = $submission->agent_name;
                $model->agent_name = $submission->agent_name;        
                $model->phone_number = $submission->phone_number; 
                $model->email_address = $submission->email_address;                                
                //building info
                $model->cov_a = $submission->cov_a;
                $model->other_structures = $submission->other_structures;
                $model->loss_of_use = $submission->loss_of_use;
                $model->med_pay = $submission->med_pay;
                $model->aop_ded = $submission->aop_ded; 
                $model->construction_type = $submission->construction_type; 
                $model->protection_class = $submission->protection_class;
                $model->new_purchase = $submission->new_purchase;
                $model->email_address = $submission->email_address;  
                $model->prior_carrier = $submission->prior_carrier;  
                $model->prior_carrier_name = $submission->prior_carrier_name;  
                $model->prior_carrier_effective_date = $submission->prior_carrier_effective_date;

                $model->status = 'file';
                $model->submission_number = $submission->submission_number; 
                $model->submission_id = $submission->id;
                //additional coverage
                $model->mold = $submission->mold;
                $model->mold_limit = $submission->mold_limit; 
                $model->water_back_up = $submission->water_back_up; 
                $model->water_back_up_limit = $submission->water_back_up_limit;
            });
        }


        public function rws(){
        
            return $this->hasMany(RatingWorksheet::class);
        
        }   


        public function submission(){
        
            return $this->belongsTo(Submission::class, 'submission_id');
        
        }       


        public function note() {
            return $this->hasMany(Note::class)->latest();
        }         


        public static  function createFromRequest($request, $id) 
        {
            $submission = Submission::findOrFail($id); 

            File::create([

              'named_insured' => $request->named_insured,
              'additional_named_insured' => $request->additional_named_insured,
              'type_of_entity' => $request->type_of_entity,
              'ssn' => $request->ssn,
              'mailing_address_street_name_and_number' => $request->mailing_address_street_name_and_number,
              'mailing_address_city' => $request->mailing_address_city,
              'mailing_address_county' => $request->mailing_address_county,
              'mailing_address_state'=> $request->mailing_address_state,
              'mailing_address_zip'=> $request->mailing_address_zip, 
              'location_address_street_name_and_number' => $request->location_address_street_name_and_number,
              'location_address_city' => $request->location_address_city,
              'location_address_county' => $request->location_address_county,
              'location_address_state'=> $request->location_address_state,
              'mailing_address_zip'=> $request->mailing_address_zip, 

            ]);   
        }    


        public static function getRWjoinFileRatePremium($id)
        {
            $rw = DB::table('rating_worksheets')
                      ->leftJoin('files', 'rating_worksheets.file_id', '=', 'files.id')   
                      ->leftJoin('raters', 'rating_worksheets.rater_id', '=', 'raters.id')    
                      ->leftJoin('premiums', 'rating_worksheets.premium_id', '=', 'premiums.id')                
                      ->select('rating_worksheets.id as rw_id',
                               'rating_worksheets.created_at as rw_created_at',
                               'files.lob as file_lob',
                               'files.effective_date as files_effective_date',
                               'files.expiration_date as files_expiration_date',
                               'files.named_insured as named_insured',
                               'files.cov_a as file_cov_a',
                               'files.other_structures as file_os',
                               'files.loss_of_use as file_lou',
                               'files.med_pay as file_med_pay',
                               'files.aop_ded as file_aop',
                               'files.construction_type as file_construction_type',
                               'files.protection_class as file_pc',
                               'files.new_purchase as file_new_purchase',
                               'files.prior_carrier as file_prior_carrier',
                               'files.zero_two_losses as file_losses',
                               'files.more_than_two_losses as file_more_than_two_losses',
                               'premiums.grand_premium as grand_premim',
                               'premiums.surplus_lines_tax_fee as sl_tax_fee',
                               'premiums.empa as empa_fee',
                               'raters.cov_a as cov_a_rate',
                               'raters.other_structures as os_rate',
                               'raters.loss_of_use as loss_of_use_rate',
                               'raters.med_pay as med_pay_rate',
                               'raters.aop_ded as aop_rate',
                               'raters.construction_type as construction_type_rate',
                               'raters.protection_class as pc_rate',
                               'raters.new_purchase as new_purchase_rate',
                               'raters.more_than_two_losses as more_than_two_losses_rate',
                               'raters.prior_carrier as prior_carrier_rate'
                               )
                      ->orderBy('rating_worksheets.id')
                      ->get();  

            return $rw;    
        }                                 


        public static function updateGeneralInfo($request, $id) 
        {                       
          return tap($file = File::findOrFail($id))->update([
              'named_insured' => $request->named_insured,
              'entity_type' => $request->entity_type,
              'additional_ni' => $request->additional_ni,
              'mailing_address_street_name_and_number' => $request->mailing_address_street_name_and_number,               
              'mailing_address_city' => $request->mailing_address_city,
              'mailing_address_county' => $request->mailing_address_county,
              'mailing_address_zip' => $request->mailing_address_zip, 
              'mailing_address_state' => $request->mailing_address_state, 
              'location_address_street_name_and_number' => $request->location_address_street_name_and_number, 
              'location_address_city' => $request->location_address_city, 
              'location_address_county' => $request->location_address_county, 
              'location_address_zip' => $request->location_address_zip, 
              'location_address_state' => $request->location_address_state,                             
          ]);

        }      


        public static function updateFileRatingCharacteristics($request, $id) 
        { 
          return tap($file = File::findOrFail($id))->update([
              'lob' => $request->lob,
              'cov_a' => $request->cov_a,
              'other_structures' => $request->other_structures,
              'med_pay' => $request->med_pay,               
              'aop_ded' => $request->aop_ded,
              'construction_type' => $request->construction_type,
              'protection_class' => $request->protection_class, 
              'prior_carrier' => $request->prior_carrier, 
              'prior_carrier_name' => $request->prior_carrier_name                           
          ]);
        }             
}
