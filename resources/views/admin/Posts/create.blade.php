@extends('admin/base')
@section('title','Novo Post')

@section('content')

<h1> Novo Post</h1>

<form method="POST" action="{{url('admin/posts')}}" >
    <!--@csrf-->
    {!! csrf_field() !!}
    <label>Título</label>
    <input type="text" name="titulo">
    
    <label>Descrição</label>
    <textarea name="descricao"></textarea>
    <input type="submit" name="" value="Cadastrar">
</form>

@endsection