<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
	public $table = 'contact_uses';

	public $fillable = ['sender','email','message'];
}
