@extends('layouts.master')
@section('title', 'Login')

@section('header')
@parent
@stop

@section('navbar')

@stop

@section('content')
<form action="{{action('controlador@validarlogin')}}" method="post" style="align=center">
    {{csrf_field()}}
    <label for="user">Usuario</label>
    <input type="text" name="user">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password">
    <br>
    <label for="key">Key</label>
    <input type="text" name="key">
    <br>
    <input type="submit" value="submit">
    
</form>
@stop


@section('footer')
@parent

@stop
