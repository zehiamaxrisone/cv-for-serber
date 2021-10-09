<div>
    <form class="login100-form validate-form p-b-33 p-t-5">

        <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="username" placeholder="Nom d'utilisateur" autocomplete="off">
            <span class="focus-input100" data-placeholder="&#xe82a;"></span>
        </div>

        <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input class="input100" type="password" name="pass" placeholder="Mot de passe">
            <span class="focus-input100" data-placeholder="&#xe80f;"></span>
        </div>

        <div class="container-login100-form-btn m-t-32">
            <button class="login100-form-btn" wire:click="login">
                Login
            </button>
            <a href="{{ route('formulaire') }}" id="btn-modele">Continuer sans se connecter ?</a>
        </div>

    </form>
</div>
