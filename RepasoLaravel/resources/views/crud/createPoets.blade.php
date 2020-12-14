@extends('layouts.master')
@if(isset($poet) and is_object($poet))

@php

        $title="Modificación de un Usuario';

        $boton = 'Actualizar';

        $poets = $poet->idpoet; 

        $fName $poet->Nombre;

        $surname = $surname->Apellido;

        $address = $address->Direccion;

        $phoneNum = $phoneNum->Num;

@endphp

@else

@php
        $title='Alta de Usuario';
       
        $boton = 'Actualizar';

        $poets = '';

        $fName = '';

        $surname = '';

        $address = '';

        $phoneNum = '';


@endphp

@endif

@section('title', 'Login')

@section('header')
    <h1 style="text-align: center; background-color: darkblue; padding: 10px; color: white; font-family: 'Book Antiqua', sans-serif">LOGIN</h1>
@stop

@section('navbar')
@stop

@section('content')
    <div style="text-align:center; font-size:18px; padding-bottom: 20px">
        <form action="{{action('Crud@store')}}" method="post">
            {{csrf_field()}}
        @if(isset($user) and is_object($poet))
        <input type="hidden" name="id" value="{{$pot}}">
        @endif

            <label for="Nombre" style="color: black; padding-left: 28px">Nombre:</label>
            <input type="text" name="Nombre" style="width: 150px" value="Nombre">
            <br>
            <label for="Apellido" style="color: black" >Apellido</label>
            <input type="text" name="Apellido" style="width: 150px" value="Apellido">
            <br>
            <label for="Direccion" style="color: black; padding-left: 60px">Direccion</label>
            <input type="text" name="Direccion" style="width: 150px" value="Direccion">
            <br>
            <label for="Codigo" style="color: black; padding-left: 60px">Codigo</label>
            <input type="text" name="Codigo" style="width: 150px" value="Codigo">
            <br>
            <label for="Num" style="color: black; padding-left: 60px">Num</label>
            <input type="text" name="Num" style="width: 150px" value="Num">
            <br>
            <input type="submit" value="Entrar">
            <br>
            <input type="submit" value="{{$boton}}">
        </form>
        <br>
        <img src="img/login.jpg" style="width: 20%" alt="">
    </div>
@stop

@section('footer')
    @parent
@stop
