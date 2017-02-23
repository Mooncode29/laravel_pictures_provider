@extends('layout')
@section('finalhead')
<title>Pictures provider</title>
</head>
<body>
	@stop

	@section('content')
	<div class="ui inverted vertical masthead center aligned segment">
		<div class="ui container">
			<div class="ui large secondary inverted pointing menu"></div>
			<div class="ui text container">
				<h1 class="ui inverted header">Pictures Provider</h1>
				<h3>La solution image de tous vos projets</h3>
				<div class="ui large secondary inverted pointing menu"></div>
			</div>
		</div>
	</div>
	<div class="ui vertical stripe segment">
		<div class="ui middle aligned grid container">
			<div class="row">
				<div class=" eight wide right floated column">
					<h2 class="ui header">Comment faire pour changer la taille d'une image?</h2>
					<p>Il suffit d'entrer la taille d'image que vous souhaitez (largeur et hauteur) à la fin de l'URL dans la barre https et d'appuyer sur la touche "Entrée" de votre clavier.<br>Vous obtiendrez alors, votre image redimentionnée.</p>
					<br>
					<br>
					<div class="ui black segment">
						<code>https://Pictures provider.fr/200/300</code>
					</div>
				</div>
				<div class="eight wide left floated column">
					<img class="ui left floated" src="{{URL::asset('photos_simplon/DHP_7022.jpg')}}
					" alt=""> 
				</div>
			</div>
		</div>
	</div>

	@stop