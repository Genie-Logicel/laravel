<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExperienceController extends Controller
{
    public function index()
    {
        $expericences = DB::table('experiences')->get();
        return view('pages.experience.experience', ['expericences' => $expericences]);
    }
    public function create()
    {
        return view('pages.experience.add-experience');
    }
    public function store(Request $request)
    {
        $request->validate([
            'société' => 'required',
            'poste' => 'required',
            'annee' => 'required',
        ]);

        try {
            DB::table('experiences')->insert([
                'société' => $request->société,
                'poste' => $request->poste,
                'annee' => $request->annee,
            ]);
            return redirect('/experience')->with('status', 'Data Experience Berhasil Ditambahkan!');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
