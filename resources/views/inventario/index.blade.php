@extends('layouts.app')

@section('content')

<div class="container">
@if (Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{Session::get('mensaje')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"></span>
    </button>
    </div>
@endif

<a href = "{{ url('inventario/create')}}" class="btn btn-success"> Registrar nuevo producto</a>
<br>
<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Cantidad</th>
            <th>Unidad</th>
            <th>Fecha de caducidad</th>
            <th>Proveedor</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($inventario as $inv){
            <tr>
                <td>{{ $inv->id }}</td>
                <td>{{ $inv->Nombre }}</td>
                <td>{{ $inv->Cantidad }}</td>
                <td>{{ $inv->Unidad }}</td>
                <td>{{ $inv->Fecha }}</td>
                <td>{{ $inv->Proveedor }}</td>
                <td> 
                    
                <a href="{{ url('/inventario/'.$inv->id.'/edit/')}}" class="btn btn-warning">
                    Editar
                </a>

                <form method="post" action="{{ url('/inventario/'.$inv->id)}}" class="d-inline">
                    @csrf
                    {{ method_field('DELETE')}}
                    <input type="submit" value="Borrar" class="btn btn-danger" onclick="return confirm('¿Quieres Borrar?')">
                </form>
                </td>
            </tr>
        }
        @endforeach
    </tbody>
</table>

{!! $inventario->links() !!}
</div>

@endsection
