<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Model extends Model
{
    protected $fillable = [
        'id', 'name', 'brand_id'
    ];

    public function brand() {
      return $this->belongsTo("App/Brand");
    }
}
