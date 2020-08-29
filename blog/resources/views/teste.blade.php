<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
	<main>
		Conteúdo<br>
		{{ $teste }} - {{ $compact }} - {!! $compact !!}<br>
		{{ $xss }}

		<!-- imprime do jeito que está sem passar por httpentities -->
		{!! $xss !!}
	</main>
</body>
</html>