<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\Cursus;
use App\Models\Domaine;
use App\Models\Entreprise;
use App\Models\Etablissement;
use App\Models\Experience;
use App\Models\Langue;
use App\Models\Loisir;
use App\Models\Mission;
use App\Models\Personne;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{

    public $personne = null;
    public $cursuses = null;

    public function index() {
        return view('index');
    }

    public function login2() {
        return view('login2');
    }

    public function modele() {
        //$personne = Personne::with('nom', 'prenom', 'date2naiss', 'lieu2naiss', 'infosup', 'email', 'tel', 'username', 'password')->get();
        return view('modele');
    }

    public function modele2() {
        return view('modele2');
    }

    public function modele3() {
        return view('modele3');
    }

    public function modele4() {
        return view('modele4');
    }

    public function formulaire() {
        return view('formulaire');
    }

    

    

    public function cv2() {
        return view('cv2', [
            'personne' => $this->personne,
            'etablissement' => $this->etabliss,
            'cursus' => $this->cursus,
            'exp' => $this->exp,
            'domaine' => $this->domaine,
            'entreprise' => $this->entreprise,
            'langue' => $this->langue,
            'loisir' => $this->loisir,
            'competence' => $this->competence,
            'mission' => $this->mission,
            'cur' => $this->cursuses,
            'lg' => $this->langues,
            'com' => $this->com,
            'lois' => $this->lois,
            'miss' => $this->miss,
        ]);
    }

    public function cv3() {
        return view('cv3', [
            'personne' => $this->personne,
            'etablissement' => $this->etabliss,
            'cursus' => $this->cursus,
            'exp' => $this->exp,
            'domaine' => $this->domaine,
            'entreprise' => $this->entreprise,
            'langue' => $this->langue,
            'loisir' => $this->loisir,
            'competence' => $this->competence,
            'mission' => $this->mission,
            'cur' => $this->cursuses,
            'lg' => $this->langues,
            'com' => $this->com,
            'lois' => $this->lois,
            'miss' => $this->miss,
        ]);
    }

    public function cv4() {
        return view('cv3', [
            'personne' => $this->personne,
            'etablissement' => $this->etabliss,
            'cursus' => $this->cursus,
            'exp' => $this->exp,
            'domaine' => $this->domaine,
            'entreprise' => $this->entreprise,
            'langue' => $this->langue,
            'loisir' => $this->loisir,
            'competence' => $this->competence,
            'mission' => $this->mission,
            'cur' => $this->cursuses,
            'lg' => $this->langues,
            'com' => $this->com,
            'lois' => $this->lois,
            'miss' => $this->miss,
        ]);
    }

    public function cv5() {
        return view('cv5', [
            'personne' => $this->personne,
            'etablissement' => $this->etabliss,
            'cursus' => $this->cursus,
            'exp' => $this->exp,
            'domaine' => $this->domaine,
            'entreprise' => $this->entreprise,
            'langue' => $this->langue,
            'loisir' => $this->loisir,
            'competence' => $this->competence,
            'mission' => $this->mission,
            'cur' => $this->cursuses,
            'lg' => $this->langues,
            'com' => $this->com,
            'lois' => $this->lois,
            'miss' => $this->miss,
        ]);
    }

    public function getCursus() {
        $personnes = Personne::find();
        return $this->cursuses = $personnes->cursuses()->get();
    }

}
