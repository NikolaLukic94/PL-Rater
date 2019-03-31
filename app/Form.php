<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'name', 'edition_date', 'text', 'attachment', 'archived'
    ];
}
