
<html>
	<head>
		<title>@yield("Titulo")</title>
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" />
		<link rel="stylesheet" href="{{ asset('css/all.css')}}" />
		<link rel="stylesheet" href="{{ asset('css/custom.css')}}" />
		<script src="{{ asset('js/jquery.js') }}"></script>
	</head>
	<body>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link active"  href="/especie">Espécie</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active"  href="/animal">Animal</a>
			</li>
		</ul>
		@if (Session::get("status") == "salvo")
			<div class="alert alert-success" role="alert">
				Salvo com sucesso!
			</div>
		@endif
		@if (Session::get("status") == "excluido")
			<div class="alert alert-danger" role="alert">
				Exluido com sucesso!
			</div>
		@endif
		<div class="container">
			@yield("formulario")
			@yield("tabela")
		
		</div>
	
	
	</body>

</html>