<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public static function getCustomEmailProperties($request) 
    {
    	$properties = [];

        $subject = $request->input('subject_line');
        $body = $request->input('body');
        $to = $request->input('to');

        return $properties = ['subject' => $subject, 
        					  'body' => $body, 
        					  'to' => $to];
    }
}
