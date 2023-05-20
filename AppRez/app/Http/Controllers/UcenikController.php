<?php

namespace App\Http\Controllers;

use App\Models\Ucenik;
use Illuminate\Http\Request;

class UcenikController extends Controller
{
    public function index()
    {
        return Ucenik::all();
    }

    public function store(Request $request)
    {
        $ucenik = new Ucenik();
        $ucenik->email = $request->email;
        $ucenik->sifra = $request->sifra;
        $ucenik->ime = $request->ime;
        $ucenik->prezime = $request->prezime;
        $ucenik->broj_telefona = $request->broj_telefona;
        $ucenik->prisutnost = $request->prisutnost;
        $ucenik->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $ucenik = Ucenik::find($request->id);
        $ucenik->email = $request->email;
        $ucenik->sifra = $request->sifra;
        $ucenik->ime = $request->ime;
        $ucenik->prezime = $request->prezime;
        $ucenik->broj_telefona = $request->broj_telefona;
        $ucenik->prisutnost = $request->prisutnost;
        $ucenik->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Ucenik::find($id)->delete();

        return 'Izbrisano';
    }
}