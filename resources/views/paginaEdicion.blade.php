@extends('layouts.principal')

@section('header')
Editando... "{{$proyecto->NombreProyecto}}"
@endsection

@section('contents')
Ingrese nuevos valores:
<div>
<form method='POST' action="{{route('editar', ['id' => $proyecto->id])}}">
@csrf
@method('PUT')
<label for='NombreProyecto'    >Nombre:</label>
<input type='text' name='NombreProyecto'       value="{{$proyecto->NombreProyecto}}" required>

<label for='fuenteFondos'      >Fuente:</label>
<input type='text' name='fuenteFondos'         value="{{$proyecto->fuenteFondos}}" required>

<label for='MontoPlanificado'  >Planificado:</label>
<input type='number' name='MontoPlanificado'   value="{{$proyecto->MontoPlanificado}}" required>

<label for='MontoPatrocinado'  >Patrocinado:</label>
<input type='number' name='MontoPatrocinado'   value="{{$proyecto->MontoPatrocinado}}" required>

<label for='MontoFondosPropios'>Propio:</label>
<input type='number' name='MontoFondosPropios' value="{{$proyecto->MontoFondosPropios}}" required>

<button type='submit'>Modificar</button>
</form>
<a id="abort" href="{{route('homepage')}}">Cancelar</a>
</div>
@endsection

