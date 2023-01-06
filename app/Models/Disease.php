<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;

    protected $fillable = [
        'disease_code',
        'disease_name',
    ];

    public function indications()
    {
        return $this->belongsToMany(Indication::class, 'indication_of_diseases', 'disease_id', 'indication_id');
    }
}
