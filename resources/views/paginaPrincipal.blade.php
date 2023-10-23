@extends('layouts.principal')

@section('header')
Homepage
@endsection

@section('contents')
Consulta aqui los proyectos vigentes:

<table id="matriz-estilizada">
@foreach($lista_de_proyectos as $proyecto)
<tr>

    <td>{{$proyecto->NombreProyecto}}</td>
    <td>{{$proyecto->fuenteFondos}}</td>
    <td>{{$proyecto->MontoPlanificado}}</td>
    <td>{{$proyecto->MontoPatrocinado}}</td>
    <td>{{$proyecto->MontoFondosPropios}}</td>
    <td><a href="{{route('editarProyecto', ['id' => $proyecto->id])}}">edit</a></td>
    <td><a href="{{route('eliminarProyecto', ['id' => $proyecto->id])}}">delete</a></td>

</tr>
@endforeach
</table>

Añadir proyecto
<div>
<form method='POST' action="{{route('nuevoProyecto')}}">
@csrf

<label for='NombreProyecto'    >Nombre:</label>
<input type='text'   name='NombreProyecto'      required>

<label for='fuenteFondos'      >Fuente:</label>
<input type='text'   name='fuenteFondos'        required>

<label for='MontoPlanificado'  >Planificado:</label>
<input type='number' name='MontoPlanificado'    required>

<label for='MontoPatrocinado'  >Patrocinado:</label>
<input type='number' name='MontoPatrocinado'    required>

<label for='MontoFondosPropios'>Propio:</label>
<input type='number' name='MontoFondosPropios'  required>
<button type='submit'>+</button>
</form>
</div>
@endsection