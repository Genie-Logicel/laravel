<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormMember extends Component
{

    use WithFileUploads;

    public $id_skills;
    public $inputs_skill = [];
    public $i_skill = 0;

    public $id_exp;
    public $inputs_exp = [];
    public $i_exp = 0;

    public $id_study;
    public $inputs_study = [];
    public $i_study = 0;

    public $id_form;
    public $inputs_form = [];
    public $i_form = 0;

    public $id_link;
    public $inputs_link = [];
    public $i_link = 0;

    public $id_other;
    public $inputs_other = [];
    public $i_other = 0;

    public $nom, $prenom, $adresse, $email, $image, $role_id , $sex;


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

    public function add_form($i)
    {
        $i = $i + 1;
        $this->i_form = $i;
        array_push($this->inputs_form, $i);
    }

    public function remove_form($i)
    {
        unset($this->inputs_form[$i]);
        unset($this->id_form[$i]);
    }

    public function add_link($i)
    {
        $i = $i + 1;
        $this->i_link = $i;
        array_push($this->inputs_link, $i);
    }

    public function remove_link($i)
    {
        unset($this->inputs_link[$i]);
        unset($this->id_link[$i]);
    }

    public function add_other($i)
    {
        $i = $i + 1;
        $this->i_other = $i;
        array_push($this->inputs_other, $i);
    }

    public function remove_other($i)
    {
        unset($this->inputs_other[$i]);
        unset($this->id_other[$i]);
    }


    public function store()
    {
        $id_skills = join(',', $this->id_skills);
        $id_exp = join(',', $this->id_exp);
        $id_study = join(',', $this->id_study);
        $id_form = join(',', $this->id_form);
        $id_link = join(',', $this->id_link);
        $id_other = join(',', $this->id_other);

        try {
            DB::table('membres')->insert([
                'nom' => $this->nom . ' ' . $this->prenom,
                'adresse' => $this->adresse,
                'email' => $this->email,
                'image' => $this->image->getClientOriginalName(),
                'sex' => $this->sex,
                'competence_id' => $id_skills,
                'role_id' => $this->role_id,
                'etude_id' => $id_study,
                'autre_competence_id' => $id_other,
                'lien_personnel_id' => $id_link,
                'formation_id' => $id_form,
                'experience_id' => $id_exp,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $this->reset();
        } catch (\Throwable $th) {
            throw $th;
        }
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
