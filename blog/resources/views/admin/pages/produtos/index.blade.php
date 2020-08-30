@extends ('admin.layouts.app')
@section('title', 'Gestão de produtos')

@section('content')
	<h1>Exibindo os produtos</h1>
	<a href="{{ route('produtos.create') }}">Cadastrar</a><br>
	<a href="{{ route('produtos.edit',1) }}">Editar 1</a>
	{{-- Incluindo --}}
	@include('admin.includes.alerts', ['content' => "Alerta de preços de produtos"])

	@if ($teste === 123 )
		<p> É igual a {{ $teste }}</p>
	@else
		<p>É diferente</p>
	@endif

	@unless($teste === '123')
		<p>Retornou false</p>
	@else
		<p>Retornou true</p>
	@endunless

	@isset($variavelExiste)
		<p>Variavel existe</p>
	@else
		<p>Não existe</p>
	@endisset

	@empty($record)
		<p>Vazio</p>
	@else
		<p>Cheio</p>
	@endempty

	@auth
		<p>Autenticado</p>
	@else
		<p>Não autenticado</p>
	@endauth

	@guest
		<p>Visitante</p>
	@else
		<p>Registrado</p>
	@endguest

	@switch($teste)
		@case(1)
			<p>1</p>
			@break
		@case(123)
			<p>{{ $teste }}</p>
			@break
		@default
			<p>Default</p>
	@endswitch

	<hr>

	<!-- Estrutura de repetição no Blade -->
	@if(isset($testeArray))
		@foreach($testeArray as $teste)
			<p @if($loop->last) class="last" @endif>{{ $teste }}</p>
		@endforeach
	@endif

	@forelse($testeArray as $teste)
		<p @if($loop->first) class="last" @endif>{{ $teste }}</p>
	@empty
		<p>Não existe</p>
	@endforelse

	{{-- inserindo components e slots --}}
	@component('admin.components.cards')
		@slot('title')
			Título do card
		@endslot
		Aqui vai o conteúdo do slot
	@endcomponent

@endsection

@push('styles')
<style type="text/css">
	.last {background-color: #123456; color: #FFF; }
</style>
@endpush

@push('scripts')
<script type="text/javascript">
	document.body.style.background = '#efefef';
</script>
@endpush