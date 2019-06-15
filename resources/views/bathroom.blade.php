{{-- resources/views/admin/dashboard.blade.php --}}
@extends('adminlte::page')
@section('title', 'EasyHome - Banheiro')
@section('content_header')
<div><a type="button" class="btn btn-block btn-primary btn-lg" href="{{route('home')}}">Voltar</a></div><br>
<div align="center">
    <h1>Banheiro</h1>
</div>
@stop
@section('content')
<div>
    <div class="text-center">
        <div><a type="button" class="btn btn-block btn-warning btn-lg" href="operation/bathroom/light/on">Ligar Lâmpada</a> </div> <br>
        <div><a type="button" class="btn btn-block btn-danger btn-lg" href="operation/bathroom/light/off">Desligar Lâmpada</a></div><br>
    </div>
</div>
@stop