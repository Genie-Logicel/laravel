<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    function index()
    {
        return view('pages.member.member');
    }

    function create()
    {
        return view('pages.member.add-member');
    }
}
