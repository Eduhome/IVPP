@extends('template.main.index')
@section('css')
 <link rel="stylesheet" href="{{asset('css/custom-styles.css')}}">
@endSection
@section('icon','users')
@section('title','Gestion de Personas')
@section('content')

<table class = "table table-bordered table-striped">

    <thead>
        <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>celular</th>
        </tr>

    </thead>


<tbody>
        @foreach($personas as $persona)
        <tr>
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->apellido}}</td>
            <td>{{$persona->celular}}</td>
        </tr>

        @endforeach

        </tbody>
        </table>

        {{$personas->render()}}
      
@endSection