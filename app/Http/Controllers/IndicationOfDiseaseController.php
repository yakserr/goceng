<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Indication;
use App\Models\IndicationOfDisease;
use Illuminate\Http\Request;

class IndicationOfDiseaseController extends Controller
{
    public function index()
    {

        $indicationOfDiseases = Disease::with('indications')->get();
        $diseases = Disease::all();
        $indications = Indication::all();

        return view('indicationofdisease.index', ['indicationOfDiseases' => $indicationOfDiseases, 'diseases' => $diseases, 'indications' => $indications]);
    }
}
