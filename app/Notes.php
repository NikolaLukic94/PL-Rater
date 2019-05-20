<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
	use Traits\RecordsActivity;

    protected $fillable = [
        'title', 'text', 'file_id'
    ];

    public function file() {
        return $this->belongsTo(File::class, 'file_id');
    }    

    public static  function createFromRequest($request) 
    {
        $user = auth()->user();

        Notes::create([
            'title' => $request->title,
            'text' => $request->text,
            'created_by' => $user->id,
            'file_id' => $id
        ]);  
    }    
}
