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
				<h3>Les plus belles images pour de meilleurs projets</h3>
			</div>
		</div>
	</div>
	<div class="ui vertical stripe segment">
		<div class="ui middle aligned stackable grid container">
			<div class="row">
				<div class="eight wide column">
					<h3 class="ui header">jujujuju</h3>
					<p>kdfskgfsdkgsikgsdgsd</p>
				</div>
			</div>
			<div class="row">
				<div class="four wide right floated column">
					<img class="ui massive right floated" src="{{URL::asset('photos_simplon/DHP_7000.jpg')}}"> 
				</div>
			</div>
			<div class="ui orange segment">
				<p>hhhhhhhhhhhhhhhhhhhhh</p>
			</div>
		</div>
	</div>




	@stop