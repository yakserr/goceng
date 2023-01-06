<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndicationOfDisease extends Model
{
    use HasFactory;

    protected $table = 'indication_of_diseases';

    protected $fillable = [
        'indication_id',
        'disease_id',
    ];

    public function disease()
    {
        return $this->belongsTo(Disease::class);
    }
}
