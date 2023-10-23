@extends('layouts.principal')

@section('header')
Eliminando... "{{$proyecto->NombreProyecto}}"
@endsection

@section('contents')
<div>
"{{$proyecto->NombreProyecto}}" sera eliminado.<br>
Desea continuar?:
<form method='POST' action="{{route('eliminar', ['id' => $proyecto->id])}}">
@csrf
@method('DELETE')
<br>
<button type='submit'>Eliminar</button>
</form>
<br>
<a id="abort" href="{{route('homepage')}}">Cancelar</a>
</div>
@endsection


