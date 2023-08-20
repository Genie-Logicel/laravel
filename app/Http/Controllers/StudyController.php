<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudyController extends Controller
{
    public function index()
    {
        $studies = DB::table('etudes')->get();

        return view('pages.study.study', [
            'studies' => $studies,
        ]);
    }

    public function create()
    {
        return view('pages.study.add-study');
    }

    function store(Request $request)
    {
        $request->validate([
            'institution' => 'required',
            'niveau' => 'required',
            'domaine' => 'required',
        ]);

        try {
            DB::table('etudes')->insert([
                'institution' => $request->institution,
                'niveau' => $request->niveau,
                'domaine' => $request->domaine,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('study')->with('success', 'Study added successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
