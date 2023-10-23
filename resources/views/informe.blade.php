@extends('layouts.principal')

@section('header')
PDF
@endsection

@section('contents')
<table id="matriz-estilizada">
@foreach($lista_de_proyectos as $proyecto)
<tr>

    <td>{{$proyecto->NombreProyecto}}</td>
    <td>{{$proyecto->fuenteFondos}}</td>
    <td>{{$proyecto->MontoPlanificado}}</td>
    <td>{{$proyecto->MontoPatrocinado}}</td>
    <td>{{$proyecto->MontoFondosPropios}}</td>

</tr>
@endforeach
</table>
@endsection
