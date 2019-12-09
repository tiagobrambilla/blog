@extends('admin/base')
@section('title', 'Criar novo VIDEOS')

@section('content')
	<h1>Novo Video</h1>

	<form method="post" action="{{url('admin/videos/'.$video->id)}}">
		@csrf
		{!! csrf_field() !!}

		<input type="hidden" name="_method" value="PUT">
		<label>Título</label>
		<input type="text" name="titulo" value="{{$video->titulo}}">

		<label>Link</label>
		<input type="text" name="link" value="{{$video->link}}">

		<label>Descrição</label>
		<textarea name='descricao'>{{$video->descricao}}</textarea>

		<input type="submit" value="Cadastrar">
	</form>
@endsection
