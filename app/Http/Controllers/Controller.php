<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
      
    }

    public $home_type = [
          '1' => 'dwelling',
          '2' => 'condominium',
        ];

    public $usage = [
          '1' => 'primary',
          '2' => 'secondary',
          '3' => 'rental',
        ];

    public $roof_type = [
          '1' => 'gable',
          '2' => 'flat',
          '3' => 'shed',
        ];

    public $roof_material = [
          '1' => 'asphalt_shingle',
          '2' => 'metal',
          '3' => 'wood_shake',
          '4' => 'slate',
        ];

    public $roof_protections = [
          '1' => 'shutters',
          '2' => 'plywood',
        ];

    public $default_limits = [
          '1' => '1000',
          '2' => '5000',
          '3' => '10000',
        ];

    public $credit = [
          '1' => '0.7',
          '2' => '0.8',
          '3' => '0.85',
          '4' => '0.90',
          '5' => '0.95',
          '6' => '1',
          '7' => '1.05',
          '8' => '1.10',
          '9' => '1.15',
        ];

    public $type_of_entity = [
          '1' => 'individual',
          '2' => 'corporately_titled',
        ];

    public $lob = ['1'=> 'HO3',
                    '2' => 'DP1',
                    '3' => 'DP3',
        ];

    public $state = ['1' => 'LA',
                    '2' => 'CA',
                    '3' => 'FL',
        ];

    public $med_pay = ['1' => '1000',
                    '2' => '2500',
                    '3' => '5000',
        ];

    public $aop = ['1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4'=> '5',
        ];

    public $constr_type = ['1' => 'Frame',
                    '2' => 'JM',
                    '3' => 'MV',
                    '4'=> 'MNC',
        ];

    public $pc = ['1' => '1',
                    '2' => '2',
                    '3' => '3',
                    '4'=> '4',
                    '5' => '5',
        ];

    public $yes_no = [
        '1' => 'yes',
        '2' => 'no',
        ];

    public $priority = [
        '1' => 'low',
        '2' => 'medium',
        '3' => 'high',
        ];

    public $statuses = [
          '1' => 'Pending',
          '2' => 'Questions to agent',
          '3' => 'Rated',
          '4' => 'Quoted',
          '5' => 'Quoted - expired',
          '6' => 'Bound - pending',
          '7' => 'Binder Issued',
          '8' => 'Policy Issued',
          '9' => 'Endorsed',
          '10' => 'DNOC',
          '11' => 'Cancelled',
          '12' => 'Follow Up',
        ];
}
