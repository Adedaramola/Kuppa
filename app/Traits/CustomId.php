<?php

namespace App\Traits;

use Haruncpi\LaravelIdGenerator\IdGenerator;

trait CustomId{

    protected static function boot()
    {
        parent::boot();
        static::creating(function($model){
            $model->uuid = IdGenerator::generate([
                'table'=>$model->table,
                'length'=>8,
                'prefix'=>date('ymd')
            ]);
        });
    }
}
