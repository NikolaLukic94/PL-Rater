<?php

use App\Rate;
use Illuminate\Database\Seeder;

class RateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rate::create([

            'general_rate' => '1',
            'lob' => 'HO3',
            'cov_a' => '0.009',
            'other_structures'  => '0.009',
            'loss_of_use'  => '0.009',
            'med_pay_1k'  => '1.05',
            'med_pay_2_5k' => '1',
            'med_pay_5k' => '0.95',
            'aop_ded_1' => '1.10',
            'aop_ded_2' => '1.05',
            'aop_ded_3' => '1',
            'aop_ded_4' => '0.95',
            'aop_ded_5' => '0.90',
            'frame' => '1',
            'jm' => '1.05',
            'bv' => '0.95',
            'masonry' => '0.009',
            'protection_class_1' => '1.15',
            'protection_class_2' => '1.10',
            'protection_class_3' => '1.05',
            'protection_class_4' => '1',
            'protection_class_5' => '1.05',
            'new_purchase' => '1',
            'prior_carrier' => '0.9',
            'prior_carrier_name' => '0.95',
            'zero_two_losses' => '1.10',
            'more_than_two_losses' => '1.20',
                    ]);

        Rate::create([

            'general_rate' => '1.10',
            'lob' => 'DP3',
            'cov_a' => '0.009',
            'other_structures'  => '0.009',
            'loss_of_use'  => '0.009',
            'med_pay_1k'  => '1.05',
            'med_pay_2_5k' => '1',
            'med_pay_5k' => '0.95',
            'aop_ded_1' => '1.10',
            'aop_ded_2' => '1.05',
            'aop_ded_3' => '1',
            'aop_ded_4' => '0.95',
            'aop_ded_5' => '0.90',
            'frame' => '1',
            'jm' => '1.05',
            'bv' => '0.95',
            'masonry' => '0.009',
            'protection_class_1' => '1.15',
            'protection_class_2' => '1.10',
            'protection_class_3' => '1.05',
            'protection_class_4' => '1',
            'protection_class_5' => '1.05',
            'new_purchase' => '1',
            'prior_carrier' => '0.9',
            'prior_carrier_name' => '0.95',
            'zero_two_losses' => '1.10',
            'more_than_two_losses' => '1.20',
                    ]);

        Rate::create([

            'general_rate' => '1.20',
            'lob' => 'DP3',
            'cov_a' => '0.009',
            'other_structures'  => '0.009',
            'loss_of_use'  => '0.009',
            'med_pay_1k'  => '1.05',
            'med_pay_2_5k' => '1',
            'med_pay_5k' => '0.95',
            'aop_ded_1' => '1.10',
            'aop_ded_2' => '1.05',
            'aop_ded_3' => '1',
            'aop_ded_4' => '0.95',
            'aop_ded_5' => '0.90',
            'frame' => '1',
            'jm' => '1.05',
            'bv' => '0.95',
            'masonry' => '0.009',
            'protection_class_1' => '1.15',
            'protection_class_2' => '1.10',
            'protection_class_3' => '1.05',
            'protection_class_4' => '1',
            'protection_class_5' => '1.05',
            'new_purchase' => '1',
            'prior_carrier' => '0.9',
            'prior_carrier_name' => '0.95',
            'zero_two_losses' => '1.10',
            'more_than_two_losses' => '1.20',
                    ]);
    }
}
