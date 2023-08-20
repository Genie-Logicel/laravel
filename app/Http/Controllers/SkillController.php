<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    function index()
    {
        return view('pages.skill.skill');
    }

    function create()
    {
        return view('pages.skill.add-skill');
    }
}
