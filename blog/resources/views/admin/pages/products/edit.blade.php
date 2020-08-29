@extends('admin.layouts.app')

@section('title')
	Cadastro de produtos
@endsection

@section('content')
<h1>Editar Produto {{ $id }}</h1>

<form action="{{ route('products.update', $id) }}" method="post">
	<input type="text" name="name" id="name" placeholder="Nome:">
	<input type="text" name="name" id="name" placeholder="Nome:">
	<button type="submit">Salvar</button>
	<input type="hidden" name="_method" value="PUT">
	@csrf
	@method('PUT')
</form>
@endsection