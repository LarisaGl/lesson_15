<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fields_value extends Model
{
    protected $fillable = [
        'id', 'field_id', 'model_id', 'value_str', 'value_int', 'value_bool'
    ];

    public function field() {
      return $this->belongsTo("App/Field");
    }

    public function model() {
      return $this->belongsTo("App/Model");
    }
}
