<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndicationCreateRequest;
use App\Models\Indication;
use Illuminate\Http\Request;

class IndicationController extends Controller
{
    public function index()
    {
        $indications = Indication::all();

        return view('indication.index', ['indications' => $indications]);
    }

    public function store(IndicationCreateRequest $request)
    {
        $indication = Indication::create($request->all());

        if ($indication) {
            return redirect()->route('indication.index')->with('success', 'Indication created successfully');
        } else {
            return redirect()->route('indication.create')->with('error', 'Indication could not be created');
        }
    }

    public function destroy(Indication $indication)
    {
        if ($indication) {
            $indication->delete();

            return redirect()->route('indication.index')->with('success', 'Indication deleted successfully');
        } else {
            return redirect()->route('indication.index')->with('error', 'Indication could not be deleted');
        }
    }
}
