<?php

namespace App\Http\Controllers;

use App\Models\Obavijesti;
use Illuminate\Http\Request;

class ObavijestiController extends Controller
{
    public function index()
    {
        return Obavijesti::all();
    }

    public function store(Request $request)
    {
        $obavijesti = new Obavijesti();
        $obavijesti->text = $request->text;
        $obavijesti->nastavnik_id = $request->nastavnik_id;
        $obavijesti->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $obavijesti = Obavijesti::find($request->id);
        $obavijesti->naziv = $request->naziv;
        $obavijesti->nastavnik_id = $request->nastavnik_id;
        $obavijesti->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Obavijesti::find($id)->delete();

        return 'Izbrisano';
    }
}