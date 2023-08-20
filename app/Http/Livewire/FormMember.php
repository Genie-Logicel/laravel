<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class FormMember extends Component
{

    public $id_skills;
    public $inputs_skill = [];
    public $i_skill = 0;

    public $id_exp;
    public $inputs_exp = [];
    public $i_exp = 0;

    public $id_study;
    public $inputs_study = [];
    public $i_study = 0;


    public function add($i)
    {
        $i = $i + 1;
        $this->i_skill = $i;
        array_push($this->inputs_skill, $i);
    }

    public function remove($i)
    {
        unset($this->inputs_skill[$i]);
        unset($this->id_skills[$i]);
    }

    public function add_exp($i)
    {
        $i = $i + 1;
        $this->i_exp = $i;
        array_push($this->inputs_exp, $i);
    }

    public function remove_exp($i)
    {
        unset($this->inputs_exp[$i]);
        unset($this->id_exp[$i]);
    }

    public function add_study($i)
    {
        $i = $i + 1;
        $this->i_study = $i;
        array_push($this->inputs_study, $i);
    }

    public function remove_study($i)
    {
        unset($this->inputs_study[$i]);
        unset($this->id_study[$i]);
    }


    public function store()
    {
        // dd($this->id_skills, $this->inputs);
    }


    public function render()
    {
        return view('livewire.form-member', [
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
