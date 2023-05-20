<?php

namespace App\Http\Controllers;

use App\Models\Nastavnik;
use Illuminate\Http\Request;

class NastavnikController extends Controller
{
    public function index()
    {
        return Nastavnik::all();
    }

    public function store(Request $request)
    {
        $nastavnik = new Nastavnik();
        $nastavnik->email = $request->email;
        $nastavnik->sifra = $request->sifra;
        $nastavnik->ime = $request->ime;
        $nastavnik->prezime = $request->prezime;
        $nastavnik->broj_telefona = $request->broj_telefona;
        $nastavnik->qr_code_path = $request->qr_code_path;
        $nastavnik->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $nastavnik = Nastavnik::find($request->id);
        $nastavnik->email = $request->email;
        $nastavnik->sifra = $request->sifra;
        $nastavnik->ime = $request->ime;
        $nastavnik->prezime = $request->prezime;
        $nastavnik->broj_telefona = $request->broj_telefona;
        $nastavnik->qr_code_path = $request->qr_code_path;
        $nastavnik->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Nastavnik::find($id)->delete();

        return 'Izbrisano';
    }
}