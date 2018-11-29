<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id', 'user_id', 'catalog_id', 'quantity', 'order_status_id'
    ];

    public function user() {
      return $this->belongsTo("App/User");
    }

    public function catalog() {
      return $this->belongsTo("App/Catalog");
    }

    public function order_status() {
      return $this->belongsTo("App/Order_status");
    }
}
