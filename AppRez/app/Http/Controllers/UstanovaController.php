<?php

namespace App\Http\Controllers;

use App\Models\Ustanova;
use Illuminate\Http\Request;

class UstanovaController extends Controller
{
    public function index()
    {
        return Ustanova::all();
    }

    public function store(Request $request)
    {
        $ustanova = new Ustanova();
        $ustanova->naziv = $request->naziv;
        $ustanova->adresa = $request->adresa;
        $ustanova->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $ustanova = Ustanova::find($request->id);
        $ustanova->naziv = $request->naziv;
        $ustanova->adresa = $request->adresa;
        $ustanova->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Ustanova::find($id)->delete();

        return 'Izbrisano';
    }
}