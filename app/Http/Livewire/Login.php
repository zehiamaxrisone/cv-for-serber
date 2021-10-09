<?php

namespace App\Http\Livewire;

use App\Models\Personne;
use Illuminate\Http\Request;
use Livewire\Component;

class Login extends Component
{

    public function login2() {
        return view('login2');
    }
    
    public function login(Request $request) {
        $username = $request->username;
        $password = $request->pass;
        
        $verfie_user = Personne::where('username', $username)->get();
        $verfie_pass = Personne::where('passwrd', $password)->get();

        if ($verfie_user == $username and $verfie_pass == $password) {
            return view('formulaire');
        } else {
            return 'Mot de passe ou om d(utilisation incorrecte';
        }
        
    }

    public function render()
    {
        return view('livewire.login');
    }
}
