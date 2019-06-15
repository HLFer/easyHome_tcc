{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'EasyHome - Área de Serviço')
@section('content_header')
<div><a type="button" class="btn btn-block btn-primary btn-lg" href="{{route('home')}}">Voltar</a></div><br>
<div align="center">
    <h1>Área de Serviço</h1>
</div>
@stop
@section('content')
<div>
    <div class="text-center">
        <div><a type="button" class="btn btn-block btn-warning btn-lg" href="operation/laundry/light/on">Ligar Lâmpada</a> </div> <br>
        <div><a type="button" class="btn btn-block btn-danger btn-lg" href="operation/laundry/light/off">Desligar Lâmpada</a></div><br>
    </div>
</div>
@stop