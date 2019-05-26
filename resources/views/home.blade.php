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
        <!--
    <button type="button" class="btn btn-block btn-success btn-lg" href="{{route('living_room')}}">Sala</button>
    <button type="button" class="btn btn-block btn-success btn-lg">Cozinha</button>
    <button type="button" class="btn btn-block btn-success btn-lg">Quarto</button>
    <button type="button" class="btn btn-block btn-success btn-lg">Banheiro</button>
    <button type="button" class="btn btn-block btn-success btn-lg">Garagem</button>
    <button type="button" class="btn btn-block btn-success btn-lg">Jardim</button>
    <button type="button" class="btn btn-block btn-success btn-lg">Área de Serviço</button>
    -->

        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('living_room')}}">Sala</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('living_room')}}">Cozinha</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('living_room')}}">Banheiro</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('living_room')}}">Quarto</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('living_room')}}">Garagem</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('living_room')}}">Área de Serviço</a></div><br>
        <div><a type="button" class="btn btn-block btn-success btn-lg" href="{{route('living_room')}}">Jardim</a></div>

    </div>

</div>



@stop