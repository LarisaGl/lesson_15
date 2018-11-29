<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = [
        'id', 'model_id', 'quantity', 'price'
    ];

    public function model() {
      return $this->belongsTo("App/Model");
    }
}
