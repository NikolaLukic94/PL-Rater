<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
	use Traits\RecordsActivity;

    protected $fillable = [
        'name', 'edition_date', 'text', 'attachment', 'archived'
    ];

    public static  function createFromRequest($request, $fileNameToStore) 
    {
        Form::create([
            'name' => request('form_name'),
            'edition_date' => request('edition_date'),
            'text' => request('text'),
            'attachment' =>  $fileNameToStore
        ]);   
    }

}