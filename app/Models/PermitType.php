<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermitType extends Model
{
    use HasFactory;

    public function permitUnit()
    {
        return $this->belongsTo(PermitUnit::class);
    }
}
