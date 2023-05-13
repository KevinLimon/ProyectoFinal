@extends('layouts.app')

@section('content')
<div class="container">

<form method="POST" action="{{ url('/inventario') }}">
    @csrf
    @include('inventario.form',['modo'=>'Crear']);
</form>

</div>

@endsection