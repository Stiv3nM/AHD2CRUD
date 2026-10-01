<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Registro</title>
</head>
<body>
    <h1>Ingresar un nuevo registro</h1>
    <form action="{{route('registros.store')}}" method="POST">
        @csrf
        <label for="">Cliente: </label>
        <br>
        <input type="text" name="cliente">
        <br><br>
        <label for="">Teléfono: </label>
        <br><br>
        <input type="text" name="telefono">
        <br><br>
        <label for="">Tipo de Producto: </label>
        <br>
        <input type="text" name="tipo_producto">
        <br><br>
        <label for="">Cantidad: </label>
        <br>
        <input type="number" name="cantidad">
        <br><br>
        <label for="">Descripción: </label>
        <br>
        <input type="text" name="descripcion">
        <br><br>
        <label for="">Precio: </label>
        <br>
        <input type="number" step="0.01" name="precio">
        <br><br>
        <label for="">Estado: </label>
        <br>
        <select name="estado">
            <option value="Disponible">Disponible</option>
            <option value="No Disponible">No Disponible</option>
        </select>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="{{route('registros.index')}}">Regresar al inicio</a> 
    
</body>
</html>