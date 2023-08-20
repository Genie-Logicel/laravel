<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormationController extends Controller
{
    public function index()
    {
        $formations = DB::table('formations')->get();
        return view('pages.formation.formation', [
            'formations' => $formations,
        ]);
    }

    public function create()
    {
        return view('pages.formation.add-formation');
    }

    function store(Request $request)
    {
        $request->validate([
            'institution' => 'required',
            'titre' => 'required',
            'annee' => 'required',
        ]);

        try {
            DB::table('formations')->insert([
                'institution' => $request->institution,
                'titre' => $request->titre,
                'annee' => $request->annee,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('formation')->with('success', 'Formation added successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
