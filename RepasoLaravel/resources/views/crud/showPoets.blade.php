@extends('layouts.master')
@section('header')
    @parent
@show
@section('navbar')
   @parent
@stop
@section('content')
    <div><a href="{{action('Crud@create')}}" style="color: white;">Tabla poetas</a></div>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">id del poeta</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Direccion</th>
            <th scope="col">Codigo Postal</th>
            <th scope="col">Numero de contacto</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $user)
        <tr>
            <th scope="row">{{$user ->idUsuario}}</th>
            <td>{{$fName ->Nombre}}</td>
            <td>{{$surname ->Apellido}}</td>
            <td>{{$address ->Direccion}}</td>
            <td>{{$postcode ->Codigo}}</td>
            <td>{{$phoneNum ->Num}}</td>
            <td><a href="{{action( Crud@show', ['id' =>]}}">upd</td>
            <td><a href="{{action( Crud@update', ['id' =>]}}">upd</td>
            <td><a href="{{action( Crud@delete', ['id' =>]}}">dlt</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@stop
@section('footer')
    @parent
@stop

