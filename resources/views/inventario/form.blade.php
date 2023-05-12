
    

    <label for="Nombre">  Nombre  </label> <br>
    <input type="text" name="Nombre" id="Nombre" value="{{ isset($inventario->Nombre)? $inventario->Nombre:''}}"> <br>

    <label for="Nombre">  Cantidad  </label> <br>
    <input type="text" name="Cantidad" id="Cantidad" value="{{ isset($inventario->Cantidad)? $inventario->Cantidad:'' }}"> <br>

    <label for="Nombre">  Unidad  </label> <br>
    <select id="Unidad" name="Unidad" value="{{ isset($inventario->Unidad)? $inventario->Unidad:'Kg' }}">
        <option value="Kg" id="Kg">  Kg  </option>
        <option value="Mg" id="Mg">  Mg  </option>
        <option value="L" id="L">  L  </option>
        <option value="Oz" id="Oz">  Oz  </option>
    </select> <br>

    <label for="Nombre">  Fecha de caducidad  </label> <br>
    <input type="date" name="Fecha" id="Fecha" value="{{ isset($inventario->Fecha)? $inventario->Fecha:'$fecha' }}"> <br>

    <label for="Nombre">  Proveedor  </label> <br>
    <input type="text" name="Proveedor" id="Proveedor" value="{{ isset($inventario->Proveedor)? $inventario->Proveedor:'' }}"> <br> <br>

    <input type="submit" value="Guardar datos">