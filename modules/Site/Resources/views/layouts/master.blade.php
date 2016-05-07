<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Melhor Idade</title>
		@section('styles_principal')
		    {!! Html::style('assets/css/main.css') !!}
	    @show
	</head>
	<body>
		<div id="page">
			<div id="head">
				<div id="container">
					<div class="box-container size-img">
						<a href="{{ URL::to("/") }}">
                			{{ Html::image("assets/img/logo.png", 'Melhor idade') }}
            			</a>
					</div>
					<div class="box-container">
						<ul>
							@foreach ($menu as $valores)
								<li>
									<a href="{{ URL::to("$valores->link") }}">
										{{$valores->descricao}}
									</a>
								</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			<div id="main">
				@yield('content')
			</div>
			<div id="footer">
				RODAPE
			</div>
		</div>
		
	</body>
</html>