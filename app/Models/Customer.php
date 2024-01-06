<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'client',
        'item_id',
        'time_in',
        'time_out',
        'hours',
    ];

    public function item() {
        return $this->belongsTo(\App\Models\item::class, 'item_id');
    }
}
