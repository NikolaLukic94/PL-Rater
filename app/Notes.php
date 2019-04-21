<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
	use Traits\RecordsActivity;

    protected $fillable = [
        'title', 'text', 'file_id'
    ];
}
