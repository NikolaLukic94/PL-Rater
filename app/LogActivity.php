<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogActivity extends Model
{
    protected $fillable = [
        'subject', 'url', 'method', 'ip', 'agent', 'user_id'
    ];

    public static function addToLog($subject)
    {
    	$log = [];
    	$log['subject'] = $subject;
    	$log['url'] = \Request::fullUrl();
    	$log['method'] = \Request::method();
    	$log['ip'] = \Request::ip();
    	$log['agent'] = \Request::header('user-agent');
    	$log['user_id'] = auth()->check() ? auth()->user()->id : 1;
    	LogActivity::create($log);
    }


    public static function logActivityLists()
    {
    	return LogActivityModel::latest()->get();
    }



}
