<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
     protected $fillable = [
        'doc_number', 'type', 'img','user_id','verify'
    ];
  public function user()
  {
    return $this->belongsTo('App\User', 'user_id', 'id');

  }
}
