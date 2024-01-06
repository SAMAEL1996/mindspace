<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function sales() {
        return $this->hasMany(\App\Models\Sale::class);
    }

    public function customer() {
        return $this->hasOne(\App\Models\Customer::class);
    }
}
