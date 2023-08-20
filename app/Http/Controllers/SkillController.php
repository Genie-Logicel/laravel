<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    function index()
    {
        $skills = DB::table('competences')->get();
        return view('pages.skill.skill', [
            'skills' => $skills,
        ]);
    }

    function create()
    {
        return view('pages.skill.add-skill');
    }

    function store(Request $request)
    {
        $request->validate([
            'skill_name' => 'required',
            'skill_description' => 'required',
        ]);

        try {
            DB::table('competences')->insert([
                'nom' => $request->skill_name,
                'description' => $request->skill_description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('skill')->with('success', 'Skill added successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
