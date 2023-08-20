<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index()
    {
        $roles = DB::table('roles')->get();
        return view('pages.role.role', ['roles' => $roles]);
    }
    public function create()
    {
        return view('pages.role.add-role');
    }

    function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);

        try {
            DB::table('roles')->insert([
                'nom' => $request->nom,
                'description' => $request->description,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return redirect()->route('role')->with('success', 'Role added successfully.');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
