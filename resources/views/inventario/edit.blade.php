
<form action="{{ url('/inventario/'.$inventario->id)}}" method="post">
    @csrf
    {{ method_field('PATCH')}}
    @include('inventario.form');
</form>