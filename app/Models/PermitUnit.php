<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermitUnit extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function permit()
    {
        return $this->belongsTo(PermitUnit::class);
    }
    
    public function permitTypes()
    {
        return $this->hasMany(PermitType::class, 'id', 'permit_unit_id');
    }
}
