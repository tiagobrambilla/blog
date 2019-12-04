@extends('admin/base')
@section('title', 'Criar novo Videos')

@section('content')
	<h1>Novo Video</h1>

	<form method="post" action="{{url('admin/videos')}}">
		@csrf
		{!! csrf_field() !!}
		<label>Título</label>
		<input type="text" name="titulo">

		<label>Link</label>
		<input type="text" name="link">

		<label>Descrição</label>
		<textarea name='descricao'></textarea>

		<input type="submit" value="Cadastrar">
	</form>
@endsection
