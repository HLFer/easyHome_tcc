@extends('adminlte::page')
@section('title', 'EasyHome')
@section('content_header')
<div align="center">
    <h1>Lar Smart Lar</h1>
    <strike>
        Lar Doce Lar
    </strike>
</div>
@stop
@section('content')
<div align="center">
    <h3>Entre em casa!</h3>
    <div>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('living_room')}}">Sala</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('kitchen')}}">Cozinha</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('bathroom')}}">Banheiro</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('bedroom')}}">Quarto</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('garage')}}">Garagem</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('laundry')}}">Área de Serviço</a></div><br>
    </div>
</div>
@stop