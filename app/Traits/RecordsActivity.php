<?php

namespace App\Traits;
use Auth;

trait RecordsActivity
{
    protected function recordActivity($event)
    {
        $this->activity()->create([
            'user_id' => auth()->id(),
            'type' => $this->getActivityType($event),
        ]);      

    }

    public static function bootRecordsActivity()
    {
        foreach (static::getActivitiesToRecord() as $event) {
            static::$event(function ($model) use ($event) {
                $model->recordActivity($event);
            });
        }       
    }

    protected static function getActivitiesToRecord()
    {

        return ['created', 'updated', 'deleted'];
        
    }

    public function activity()
    {
        return $this->morphMany('App\Activity', 'subject');
    }

    public function getActivityType($event)
    {
        $type = strtolower(new \ReflectionClass($this));

        return $event.'_'.$type;
    }
}
