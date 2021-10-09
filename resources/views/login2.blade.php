<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page d'authentification</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	@livewireStyles

	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{ asset('assets/img/bg-01.jpg') }}');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Connexion au compte
				</span>
				@livewire('login')
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	@livewireScripts
</body>
</html>