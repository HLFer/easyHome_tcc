{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<div><a type="button" class="btn btn-block btn-primary btn-lg" href="{{route('home')}}">Voltar</a></div><br>

<div align="center">
    <h1>Sala de Estar</h1>
</div>

@stop



@section('content')

<div>

    <div class="text-center">
        <div><a type="button" class="btn btn-block btn-warning btn-lg" href="televisions/on/living_room">Ligar Televisão</a></div><br>
        <div><a type="button" class="btn btn-block btn-danger btn-lg" href="televisions/on/living_room">Desligar Televisão</a></div><br>
    </div>

    <div class="text-center">
        <div><a type="button" class="btn btn-block btn-warning btn-lg" href="lights/on/living_room">Ligar Lâmpada</a> </div> <br>
        <div><a type="button" class="btn btn-block btn-danger btn-lg" href="lights/off/living_room">Desligar Lâmpada</a></div><br>
    </div>

    <div class=" text-center">
        <div><a type="button" class="btn btn-block btn-warning btn-lg" href="fans/on/living_room">Ligar Ventilador</a></div><br>
        <div><a type="button" class="btn btn-block btn-danger btn-lg" href="fans/off/living_room">Desligar Ventilador</a></div><br>
    </div>


</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop