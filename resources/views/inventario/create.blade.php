create

<form method="POST" action="{{ url('/inventario') }}">
    @csrf
    @include('inventario.form');
</form>