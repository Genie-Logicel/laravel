<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LinkController extends Controller
{
    function index()
    {

        $links = DB::table('lien_personnels')->get();
        return view('pages.link.link', [
            'links' => $links,
        ]);
    }

    function create()
    {
        return view('pages.link.add-link');
    }

    function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'relation' => 'required',
        ]);

        try {
            DB::table('lien_personnels')->insert([
                'nom' => $request->nom,
                'relation' => $request->relation,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('link')->with('success', 'Link added successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
