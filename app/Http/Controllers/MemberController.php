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

    function getMembers()
    {

        $members = DB::table('membres')->join('roles','roles.id','=','membres.role_id')->select('membres.*','roles.nom as role_nom')->get();

        return response()->json([
            'status' => 'success',
            'data' => $members
        ], 200);
    }

    function getMemberById($id)
    {
        // * get member
        $member = DB::table('membres')->where('id', $id)->first();

        // * get competences
        $skills = DB::table('competences')->whereIn('id', explode(",", $member->competence_id))->get();

        // * get roles
        $role = DB::table('roles')->where('id', $member->role_id)->get();

        // * get etude
        $study = DB::table('etudes')->whereIn('id', explode(",", $member->etude_id))->get();

        // * get others
        $others = DB::table('autre_competences')->whereIn('id', explode(",", $member->autre_competence_id))->get();

        // * get links
        $links = DB::table('lien_personnels')->whereIn('id', explode(",", $member->lien_personnel_id))->get();

        // * get formation
        $formation = DB::table('formations')->whereIn('id', explode(",", $member->formation_id))->get();

        // * get experience
        $experience = DB::table('experiences')->whereIn('id', explode(",", $member->experience_id))->get();

        // * send api
        return response()->json([
            'status' => 'success',
            'data' => [
                'member' => $member,
                'skills' => $skills,
                'role' => $role,
                'study' => $study,
                'others' => $others,
                'links' => $links,
                'formation' => $formation,
                'experience' => $experience
            ]
        ], 200);
    }
}
