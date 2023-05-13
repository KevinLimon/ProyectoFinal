@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{ url('/inventario/'.$inventario->id)}}" method="post">
    @csrf
    {{ method_field('PATCH')}}
    @include('inventario.form',['modo'=>'Editar']);
</form>

</div>

@endsection