
    <h1>{{$modo}} producto</h1>

    <div class="alert alert-danger" role="alert">
        <ul>
        @if (count($errors)>0)
            @foreach($errors->all() as $error)
               <li> {{$error}} </li>
            @endforeach
        @endif
        </ul>
    </div>
    

    <div class="form-group>

    <label for="Nombre">  Nombre  </label> <br>
    <input type="text" class="form-control" name="Nombre" id="Nombre" value="{{ isset($inventario->Nombre)? $inventario->Nombre:''}}"> 

    </div> 

    <div class="form-group>
    <label for="Nombre">  Cantidad  </label> 
    <input type="text" class="form-control" name="Cantidad" id="Cantidad" value="{{ isset($inventario->Cantidad)? $inventario->Cantidad:'' }}"> 
    </div>
    <div class="form-group>
    <label for="Nombre">  Unidad  </label> 
    <select id="Unidad" class="form-control" name="Unidad" value="{{ isset($inventario->Unidad)? $inventario->Unidad:'Kg' }}">
        <option value="Kg" id="Kg">  Kg  </option>
        <option value="Mg" id="Mg">  Mg  </option>
        <option value="L" id="L">  L  </option>
        <option value="Oz" id="Oz">  Oz  </option>
    </select> 
    </div>

    <div class="form-group>
    <label for="Nombre">  Fecha de caducidad  </label> <br>
    <input type="date" name="Fecha" class="form-control" id="Fecha" value="{{ isset($inventario->Fecha)? $inventario->Fecha:'$fecha' }}"> 
    </div>

    <div class="form-group>
    <label for="Nombre">  Proveedor  </label> <br>
    <input type="text" name="Proveedor" class="form-control" id="Proveedor" value="{{ isset($inventario->Proveedor)? $inventario->Proveedor:'' }}"> <br> <br>
    </div>
    
    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">

    <a class="btn btn-primary" href = "{{ url('inventario/')}}"> Regresar </a>