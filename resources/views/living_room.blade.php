{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'EasyHome - Sala de Estar')
@section('content_header')
<div><a type="button" class="btn btn-block btn-primary btn-lg" href="{{route('home')}}">Voltar</a></div><br>
<div align="center">
    <h1>Sala de Estar</h1>
</div>
@stop
@section('content')
<div>
    <div class="text-center">
        <div><a type="button" class="btn btn-block btn-warning btn-lg" href="operation/living_room/radio/on">Ligar Rádio</a></div><br>
        <div><a type="button" class="btn btn-block btn-danger btn-lg" href="operation/living_room/radio/off">Desligar Rádio</a></div><br>
    </div>
    <div class="text-center">
        <div><a type="button" class="btn btn-block btn-warning btn-lg" href="operation/living_room/light/on">Ligar Lâmpada</a> </div> <br>
        <div><a type="button" class="btn btn-block btn-danger btn-lg" href="operation/living_room/light/off">Desligar Lâmpada</a></div><br>
    </div>
    <div class=" text-center">
        <div><a type="button" class="btn btn-block btn-warning btn-lg" href="operation/living_room/fan/on">Ligar Ventilador</a></div><br>
        <div><a type="button" class="btn btn-block btn-danger btn-lg" href="operation/living_room/fan/off">Desligar Ventilador</a></div><br>
    </div>
</div>
@stop

