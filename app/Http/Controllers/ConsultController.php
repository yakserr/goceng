<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use App\Models\Disease;
use App\Models\Indication;
use Illuminate\Http\Request;

class ConsultController extends Controller
{
    public function index()
    {
        $indications = Indication::all();

        return view('consult.index', ['indications' => $indications]);
    }

    public function store(Request $request)
    {
        $consult = new Consult();
        $consult->name = $request->name;
        $consult->email = $request->email;
        $consult->indications = $request->indications;

        // get array indication of disease
        $indicationOfDiseasesdb = $indicationOfDiseases = Disease::with('indications')->get();
        $indicationOfDiseases = [];
        foreach ($indicationOfDiseasesdb as $indicationOfDisease) {
            $indicationOfDiseases[$indicationOfDisease->id] = $indicationOfDisease->indications->pluck('id')->toArray();
        }


        //  matching array indication of disease and array indication of consult by value
        $diseasesf = [];
        foreach ($indicationOfDiseases as $key => $value) {
            if ($indicationOfDiseases[$key] == $request->indications)
                array_push(
                    $diseasesf,
                    $key
                );
        }

        // get diseases name
        $consult->diseases = Disease::find($diseasesf[0])->disease_name;
        $consult->save();


        return redirect()->route('history.index');
    }
}
