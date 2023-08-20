<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FormMember extends Component
{
    public function render()
    {
        return view('livewire.form-member',[
            'skills' => DB::table('competences')->get(),
            'experiences' => DB::table('experiences')->get(),
            'studies' => DB::table('etudes')->get(),
            'formations' => DB::table('formations')->get(),
            'links' => DB::table('lien_personnels')->get(),
            'others' => DB::table('autre_competences')->get(),
            'roles' => DB::table('roles')->get(),
        ]);
    }
}
