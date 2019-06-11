<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premium extends Model
{
    use Traits\RecordsActivity;

    protected $table = 'premiums';

    protected $fillable = ['grand_premium',
                                'surplus_lines_tax_fee',
                                'empa',
                                'file_id',

                            ];
}
