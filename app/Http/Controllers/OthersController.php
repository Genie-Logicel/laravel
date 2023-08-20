<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OthersController extends Controller
{
    public function index()
    {
        $others = DB::table('autre_competences')->get();
        return view('pages.other.other', ['others' => $others]);
    }
    public function create()
    {
        return view('pages.other.add-other');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);

        try {
            DB::table('autre_competences')->insert([
                'nom' => $request->nom,
                'description' => $request->description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('other')->with('success', 'Other added successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
