@extends('admin/base')
@section('title', 'Criar novo POSTS')

@section('content')
	<h1>Novo Post</h1>

	<form method="post" action="{{url('admin/posts/'.$post->id)}}">
		@csrf
		{!! csrf_field() !!}

		<input type="hidden" name="_method" value="PUT">
		<label>Título</label>
		<input type="text" name="titulo" value="{{$post->titulo}}">

		<label>Descrição</label>
		<textarea name='descricao'>{{$post->descricao}}</textarea>

		<input type="submit" value="Cadastrar">
	</form>
@endsection
