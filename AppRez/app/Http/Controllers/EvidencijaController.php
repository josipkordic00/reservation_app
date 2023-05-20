<?php

namespace App\Http\Controllers;

use App\Models\Evidencija;
use Illuminate\Http\Request;

class EvidencijaController extends Controller
{
    public function index()
    {
        return Evidencija::all();
    }

    public function store(Request $request)
    {
        $evidencija = new Evidencija();
        $evidencija->datum = $request->datum;
        $evidencija->nastavnik_id = $request->nastavnik_id;
        $evidencija->ucenici = $request->ucenici;
        $evidencija->ucionica_id = $request->ucionica_id;
        $evidencija->ucionica_broj = $request->ucionica_broj;
        $evidencija->ustanova_id = $request->ustanova_id;
        $evidencija->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $evidencija = Evidencija::find($request->id);
        $evidencija->datum = $request->datum;
        $evidencija->nastavnik_id = $request->nastavnik_id;
        $evidencija->ucenici = $request->ucenici;
        $evidencija->ucionica_id = $request->ucionica_id;
        $evidencija->ucionica_broj = $request->ucionica_broj;
        $evidencija->ustanova_id = $request->ustanova_id;
        $evidencija->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Evidencija::find($id)->delete();

        return 'Izbrisano';
    }
}