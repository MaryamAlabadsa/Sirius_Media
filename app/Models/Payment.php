<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function pricings()
    {
        return $this->belongsTo(Pricing::class, 'clinic_uuid', 'clinic_uuid');
    }
}
