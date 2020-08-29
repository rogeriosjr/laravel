@extends('admin.layouts.app')

@section('title')
	Cadastro de produtos
@endsection

@section('content')
<h1>Cadastrar Produto</h1>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
<img src="uploads/{{ Session::get('file') }}">
@endif

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
	<input type="text" name="name" id="name" placeholder="Nome:"><br>
	<input type="text" name="description" id="description" placeholder="Descrição:"><br>
	<input type="file" name="photo">

	@csrf
	<button type="submit">Enviar</button>
</form>
@endsection