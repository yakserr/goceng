<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indication extends Model
{
    use HasFactory;

    protected $fillable = [
        'indication_code',
        'indication_name',
    ];

    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'indication_of_diseases', 'indication_id', 'disease_id');
    }
}
