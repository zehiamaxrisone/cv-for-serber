<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Competence;
use App\Models\Cursus;
use App\Models\Domaine;
use App\Models\Entreprise;
use App\Models\Etablissement;
use App\Models\Experience;
use App\Models\Image;
use App\Models\Langue;
use App\Models\Loisir;
use App\Models\Mission;
use App\Models\Personne;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class Form extends Component
{

    ///////////////////////////////////////

    public $nom = "";
    public $displayetatcivil;
    public $displayetab;
    public $displayetab1;
    public $displaycursus; 
    public $displaycursus1; 
    public $displayexp; 
    public $displayexp1; 
    public $displaydomaine; 
    public $displaydomaine1; 
    public $displayentreprise; 
    public $displayentreprise1; 
    public $displaylangue; 
    public $displaylangue1; 
    public $displayloisir; 
    public $displayloisir1; 
    public $displaycompetence; 
    public $displaycompetence1; 
    public $displaymission; 
    public $displaymission1; 

    public function formulaire() {
        return view('formulaire');
    }

    public function mount() {
        $this->personne = null;
    }

    public function etatcivilselect() {
        $this->displayetatcivil = true;
    }

    public function etablissementselect() {
        $this->displayetab = true;
    }

    public function cursusselect() {
        $this->displaycursus = true;
    }

    public function expselect() {
        $this->displayexp = true;
    }

    public function domaineselect() {
        $this->displaydomaine = true;
    }
    public function entrepriseselect() {
        $this->displayentreprise = true;
    }

    public function langueselect() {
        $this->displaylangue = true;
    }

    public function loisirselect() {
        $this->displayloisir = true;
    }

    public function competenceselect() {
        $this->displaycompetence = true;
    }

    public function missionselect() {
        $this->displaymission = true;
    }

////////////////////////////// AAAAAAADDDDDDDDDDDDDDD ////////////////////
    public function addettablissement(Request $request) {
        $this->displayetab1 = true;
        if ($request->nometablissmnt == null or $request->nomlocalite == null) {

        } else {
            Etablissement::create([
                'nom' => $request->nometablissmnt,
                'localite' => $request->nomlocalite,
            ]);
        }
        
        // $this->getetablissement();
    }

    public function addcursus(Request $request) {
        $this->displaycursus1 = true;

        $debutcursusnew = Carbon::parse($request->debutcursus)->format('d-m-Y');
        $fincursusnew = Carbon::parse($request->fincursus)->format('d-m-Y');
        if ($request->niveau == null or $request->diplome == null or $debutcursusnew == null or $fincursusnew == null) {

        } else {
        
            Cursus::create([
                'debut' => $debutcursusnew,
                'fin' => $fincursusnew,
                'niveau' => $request->niveau,
                'diplome' => $request->diplome,
            ]);
        }
    }

    public function addexp(Request $request) {
        $this->displayexp1 = true;
        $debutexpnew = Carbon::parse($request->debutexp)->format('d-m-Y');
        $finexpnew = Carbon::parse($request->finexp)->format('d-m-Y');

        if ($debutexpnew == null or $finexpnew == null or $request->poste == null or $request->detail == null) {

        } else {
            
            Experience::create([
                'debut' => $debutexpnew,
                'fin' => $finexpnew,
                'poste' => $request->poste,
                'detail' => $request->detail,
            ]);
        }
    }

    public function addentreprise(Request $request) {
        $this->displayentreprise1 = true;

        if ($request->nomentrep == null) {

        } else {
            
            Entreprise::create([
                'nom' => $request->nomentrep,
            ]);
        }
    }

    public function addlangue(Request $request) {
        $this->displaylangue1 = true;

        if ($request->nomlangue == null or $request->niveaulangue == null) {

        } else {
            Langue::create([
                'nomlangue' => $request->nomlangue,
                'niveau	' => $request->niveaulangue,
            ]);        }
    }

    public function addloisir(Request $request) {
        $this->displayloisir1 = true;

        if ($request->nomloisir == null) {

        } else {
            Loisir::create([
                'nomloisir' => $request->nomloisir,
            ]);        
        }
    }

    public function addcompetence(Request $request) {
        $this->displaycompetence1 = true;

        if ($request->nomcompetence == null) {

        } else {
            Competence::create([
                'nom' => $request->nomcompetence,
            ]);       
        }
    }

    public function addmission(Request $request) {
        $this->displaymission1 = true;
        $debutmissionnew = Carbon::parse($request->debutmission)->format('d-m-Y');
        $finmissionnew = Carbon::parse($request->finmission)->format('d-m-Y');

        if ($finmissionnew == null or $debutmissionnew == null or $request->nommission == null or $request->nomtechnologie) {

        } else {
            Mission::create([
                'debut' => $debutmissionnew,
                'fin' => $finmissionnew,
                'nom' => $request->nommission,
                'technologie' => $request->nomtechnologie,
            ]);      
        }
    }


//////////////////////////////////////////////////////////////////////////////

    public function getetablissement()  {
        $this->etalissement = $this->cursus->cursuses()->get();
    }

    ////////////////////////////////////////

    public function store(Request $request) {

        $daten = Carbon::parse($request->datenaiss)->format('d-m-Y');

        $debutcursusnew = Carbon::parse($request->debutcursus)->format('d-m-Y');
        $fincursusnew = Carbon::parse($request->fincursus)->format('d-m-Y');

        $debutexpnew = Carbon::parse($request->debutexp)->format('d-m-Y');
        $finexpnew = Carbon::parse($request->finexp)->format('d-m-Y');

        $debutmissionnew = Carbon::parse($request->debutmission)->format('d-m-Y');
        $finmissionnew = Carbon::parse($request->finmission)->format('d-m-Y');

        $filename = time() . '.' . $request->avatar->extension();
        $path = $request->avatar->storeAs(
            'avatars',
            $filename,
            'public'
        );
        
        
        $personne = Personne::create([
            
            'nom' => $request->nometatcivil,
            'prenom' => $request->prenometatcivil,
            'date2naiss' => $daten,
            'lieu2naiss' => $request->lieunaiss,
            'infosup' => $request->description,
            'email' => $request->email,
            'tel' => $request->telephone,
            'username' => $request->username,
            'password' => $request->password,
        ]);

        $image = new Image();
        $image->path = $path;
        $personne->image()->save($image);

        $email = $request->get('email');
        $this->personne = Personne::where('email', $email)->get();

        $etablissrel = Etablissement::create([
            'nom' => $request->nometablissmnt,
            'localite' => $request->nomlocalite,
        ]);
        ////////////////////////

        $personnes = Personne::find($personne->id);
        $this->cursuses = $personnes->cursuses()->get();

        /////////////////

        $nometab = $request->get('nom');
        $this->etabliss = Etablissement::where('nom', $nometab)->get();

        ////////////////////////

        $cur = Cursus::create([
            'debut' => $debutcursusnew,
            'fin' => $fincursusnew,
            'niveau' => $request->niveau,
            'diplome' => $request->diplome,
        ]);
        ///////////////////

        $personne->cursuses()->attach($cur);

        $etablissrel->cursuses()->attach($cur);

        //////////////////

        $nivcur = $request->get('niveau');
        $this->cursus = Cursus::where('niveau', $nivcur)->get();

        $experiencerel = Experience::create([
            'debut' => $debutexpnew,
            'fin' => $finexpnew,
            'poste' => $request->poste,
            'detail' => $request->detail,
        ]);

        /////////////////////

        $personne->experiences()->attach($experiencerel);

        ///////////////////

        $postexp = $request->get('debut');
        $this->exp = Experience::where('debut', $postexp)->get();

        // $etablissrels = Personne::find($etablissrel->id);
        // $this->lois = $etablissrels->entreprises()->get();
        /////////////////////

        $entrepriserel = Entreprise::create([
            'nom' => $request->nomentrep,
        ]);

        //////////////////

        $experiencerel->entreprises()->attach($entrepriserel);

        ////////////////

        $nompent = $request->get('nom');
        $this->entreprise = Entreprise::where('nom', $nompent)->get();

        ////////////////////

        $languerel = Langue::create([
            'nomlangue' => $request->nomlangue,
            'niveau	' => $request->niveaulangue,
        ]);

        /////////////////////////

        $personne->langues()->attach($languerel);

        ////////////////

        $nomlangue = $request->get('nomlangue');
        $this->langue = Langue::where('nomlangue', $nomlangue)->get();

        $personnes = Personne::find($personne->id);
        $this->langues = $personnes->langues()->get();

        /////////////////////

        $loisirrel = Loisir::create([
            'nomloisir' => $request->nomloisir,
        ]);
        /////////////////////

        $personne->loisirs()->attach($loisirrel);

        ////////////////////

        $nomloisir = $request->get('nomloisir');
        $this->loisir = Loisir::where('nomloisir', $nomloisir)->get();

        $personnes = Personne::find($personne->id);
        $this->lois = $personnes->loisirs()->get();

        //////////////////////

        $competencerel = Competence::create([
            'nom' => $request->nomcompetence,
        ]);
        ///////////////////

        $personne->competences()->attach($competencerel);
        
        /////////////////

        $nomcom = $request->get('nom');
        $this->competence = Competence::where('nom', $nomcom)->get();

        $personnes = Personne::find($personne->id);
        $this->com = $personnes->competences()->get();

        /////////////////

        // Domaine::create([
        //     'nom' => $request->nomdomaine,
        //     'competence_id' => $competencerel->id,
        // ]);

        // $nomdom = $request->get('nom');
        // $this->domaine = Domaine::where('nom', $nomdom)->get();

        $missionrel = Mission::create([
            'debut' => $debutmissionnew,
            'fin' => $finmissionnew,
            'nom' => $request->nommission,
            'technologie' => $request->nomtechnologie,
        ]);
        
        //////////////////////

        $experiencerel->missions()->attach($missionrel);

        ////////////////////

        $nommission = $request->get('technologie');
        $this->mission = Mission::where('technologie', $nommission)->get();

        $exps = Experience::find($experiencerel->id);
        $this->miss = $exps->missions()->get();

        /////////////////////

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

    /////////////////////////////////////// LOGIN ////////////////////////





    //////////////////////////////////////////////////////////////
    
    //////////////////////////////////////// MODELE CHOISI ////////////////


   


    ///////////////////////////////////////////////////////////////////

    public function render()
    {
        return view('livewire.form');
    }
}
