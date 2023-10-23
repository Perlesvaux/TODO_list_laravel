@extends('layouts.principal')

@section('header')
PDF
@endsection

@section('contents')
<h1>Gobierno de El Salvador</h1>
<h2>MINED</h2>
<h3>{{$fecha}}</h3>
<table id="matriz-estilizada">
<tr>
    <th>ID</th>
    <th>Proyecto</th>
    <th>Fuente</th>
    <th>Planificado</th>
    <th>Patrocinado</th>
    <th>Propios</th>
</tr>
@foreach($lista_de_proyectos as $proyecto)
<tr>

    <td>{{$proyecto->id}}</td>
    <td>{{$proyecto->NombreProyecto}}</td>
    <td>{{$proyecto->fuenteFondos}}</td>
    <td>{{$proyecto->MontoPlanificado}}</td>
    <td>{{$proyecto->MontoPatrocinado}}</td>
    <td>{{$proyecto->MontoFondosPropios}}</td>

</tr>
@endforeach
</table>
@endsection
