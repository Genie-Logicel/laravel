<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    function index()
    {
        $members = DB::table('membres')->get();
        return view('pages.member.member', ['members' => $members]);
    }

    function create()
    {
        return view('pages.member.add-member');
    }
}
