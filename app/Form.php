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

    public static function getFileNameToStore($request, $attribute_name, $storage_forder_name) {

        $fileNameToStore = null;

        if($request->hasFile($attribute_name)){
        //get the filename with the extension    
            $filenameWithExt = $request->file($attribute_name)->getClientOriginalName();
        //get just filename    
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //get just extension
            $extension = $request->file($attribute_name)->getClientOriginalExtension();
        //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;    
        // upload file
            $path = $request->file($attribute_name)->storeAs('public/forms', $fileNameToStore);
        }

        return $path;
    } 

}