<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //'village','taluka','nrCity','distic','landmark','state','pincode','country', 	
    protected $fillable = ['village','taluka','nrCity','distic','landmark','state','pincode','country',
        ];
    //dissable $timestamps
    public $timestamps = false;
}
