<?php

namespace App\Http\Controllers;

use App\Models\Ucionica;
use Illuminate\Http\Request;

class UcionicaController extends Controller
{
    public function index()
    {
        return Ucionica::all();
    }

    public function store(Request $request)
    {
        $ucionica = new Ucionica();
        $ucionica->ustanova_id = $request->ustanova_id;
        $ucionica->nastavnik_id = $request->nastavnik_id;
        $ucionica->broj = $request->broj;
        $ucionica->zauzeto = $request->zauzeto;
        $ucionica->datum_rezervacije = $request->datum_rezervacije;
        $ucionica->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $ucionica = Ucionica::find($request->id);
        $ucionica->ustanova_id = $request->ustanova_id;
        $ucionica->nastavnik_id = $request->nastavnik_id;
        $ucionica->broj = $request->broj;
        $ucionica->zauzeto = $request->zauzeto;
        $ucionica->datum_rezervacije = $request->datum_rezervacije;
        $ucionica->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Ucionica::find($id)->delete();

        return 'Izbrisano';
    }
}