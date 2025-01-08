<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = [
        "description",
        "amount",
        "expiration_date",
        "is_paid"
    ];
}
