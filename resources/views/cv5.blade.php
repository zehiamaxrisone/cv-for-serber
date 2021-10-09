

<!DOCTYPE html>
<html>
<head>
	<title>CV @foreach ($personne as $pre)
        {{ $pre->prenom }}
    @endforeach 
	@foreach ($personne as $pre)
	{{ $pre->nom }}
@endforeach </title>
	<meta charset="utf-8">
	<style type="text/css">
.contenu
{
	font-weight: bold;
	border:3px skyblue solid;
	padding: 10px;
	box-shadow:10px 10px 3px black;
	border-radius:7px;
	width: 60%;
	margin-left: 20%;
}
.entete
{
	margin-bottom: 10%;
}
img
{
	width: 113px;
	height:151px;
}
.image
{
	
	display: inline-block;
	position: relative;
	right: 2%;
	float: right;
}
.presentation
{
	display: inline-block;
	position: relative;
	float: left;
	padding: 10px;
	bottom: 10px;
	
}

strong
{
	color: rgb(151,0,38);
}
span
{
	float: right;
}
h3
{
	border :3px solid skyblue;
	padding: 06px;
	background-color: skyblue;
	border-radius: 10px;
}
h2
{
	/*border:1px black solid;*/
	text-align: center;
	width: 30%;
	margin-left: 30%;
}
@media screen and (max-width: 1150px)
{
	.contenu
		{
			display: block;
			width: 96%;
			margin: auto;
			text-align: center;
		}
		.entete
		{
		margin-bottom: 10%;
		}
		.image
		{
			float: right;
		 	top: -2%;
		}
		.presentation
		{
			float: left;
			top: 15%;
		}
		.niveau
		{
			display: inline-block;
			right: auto;
			top: 3%;
			text-align: center;
		}
		h2
		{
			text-align: center;
			width: 50%;
			margin-left: 30%;
		}
}
	</style>
</head>
<body>
	<div class="contenu">
		<div class="entete">
			<div class="presentation">
				<strong>@foreach ($personne as $pre)
					{{ $pre->nom }}
				@endforeach  @foreach ($personne as $pre)
				{{ $pre->prenom }}
			@endforeach </strong><br>
				<strong>  @foreach ($personne as $pre)
					{{ $pre->date2naiss }}
				@endforeach </strong><br>
				@foreach ($personne as $pre)
                        {{ $pre->lieu2naiss }}
                    @endforeach
					<br>
					@foreach ($personne as $pre)
					{{ $pre->tel }}
				@endforeach
				<br>
				@foreach ($personne as $pre)
                            {{ $pre->email }}
                        @endforeach	</div>
			<div class="image">
				<img src="{{ Storage::url($personne->image->path) }}" alt="photo" class="img-circle float-left center" width="170px">
			</div>
		</div>
		<div class="corps">
			<h3>FORMATIONS :</h3>
			<div class="formation">
				@foreach($cur AS $cu) 
					<p>{{ $cu->diplome }} - {{ $cu->fin }} : {{ $cu->niveau }} </p>
                @endforeach

			</div>
			<h3>COMPETENCES :</h3>
			<div class="comptence">
				@foreach ($com as $comp)
				<p><strong> @foreach ($domaine as $dom)
					{{ $dom->nom }}
				@endforeach </strong>                   
					{{ $comp->nom }} <br>
				@endforeach 
			</div>

			<h3>ACTIVITES ET LOISIRS :</h3>
			<div class="loisir">
				@foreach($lois As $ls):   

                            <li>  {{ $ls->nomloisir }}   </li>
                                
                @endforeach

				<h3>@foreach ($lg as $lgs)
					{{ $lgs->nomlangue }} {{  $lgs->niveau }} 
				@endforeach </h3>
			</div>
		</div>
	</div>
</body>
</html>