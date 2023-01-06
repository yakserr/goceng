<?php

namespace App\Http\Controllers;

use App\Models\Consult;
use App\Models\Indication;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $consults = Consult::all();

        // explode indication from ["3","13","14"] to  3, 13, 14
        $indication_id = [];
        foreach ($consults as $consult) {
            $consult->indications = str_replace('"', '', $consult->indications);
            $consult->indications = str_replace('[', '', $consult->indications);
            $consult->indications = str_replace(']', '', $consult->indications);

            array_push($indication_id, $consult->indications);
        }

        $indication_name = [];
        foreach ($indication_id as $id) {
            $name = Indication::find($id)->pluck('indication_name');
            array_push($indication_name, $name);
        }

        return view('history.index', ['consults' => $consults, 'indication_name' => $indication_name]);
    }
}
