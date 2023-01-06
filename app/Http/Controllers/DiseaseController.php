<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiseaseCreateRequest;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    public function index()
    {
        $diseases = Disease::all();

        return view('disease.index', ['diseases' => $diseases]);
    }

    public function store(DiseaseCreateRequest $request)
    {
        $disease = Disease::create($request->all());

        if ($disease) {
            return redirect()->route('disease.index')->with('success', 'Disease created successfully');
        } else {
            return redirect()->route('disease.create')->with('error', 'Disease could not be created');
        }
    }

    public function destroy(Disease $disease)
    {
        if ($disease) {
            $disease->delete();

            return redirect()->route('disease.index')->with('success', 'Disease deleted successfully');
        } else {
            return redirect()->route('disease.index')->with('error', 'Disease could not be deleted');
        }
    }
}
