<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
</head>
<body>
    <h1>Editar un registro existente</h1>
    <form action="{{route('registros.update', $registros->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Cliente: </label>
        <br>
        <input type="text" name="cliente" value="{{ $registros->cliente }}">
        <br><br>
        <label for="">Teléfono: </label>
        <br>
        <input type="text" name="telefono" value="{{ $registros->telefono }}">
        <br><br>
        <label for="">Tipo de Producto: </label>
        <br>
        <input type="text" name="tipo_producto" value="{{ $registros->tipo_producto }}">
        <br><br>
        <label for="">Cantidad: </label>
        <br>
        <input type="number" name="cantidad" value="{{ $registros->cantidad }}">
        <br><br>
        <label for="">Descripción: </label>
        <br>
        <input type="text" name="descripcion" value="{{ $registros->descripcion }}">
        <br><br>
        <label for="">Precio: </label>
        <br>
        <input type="number" step="0.01" name="precio" value="{{ $registros->precio }}">
        <br><br>
        <label for="">Estado: </label>
        <br>
        <select name="estado">
            <option value="Disponible" {{ $registros->estado =='Disponible' ? 'selected' : '' }}>Disponible</option>
            <option value="No Disponible" {{ $registros->estado =='No Disponible' ? 'selected' : '' }}>No Disponible</option>
        </select>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
    <br>
    <a href="{{route('registros.index')}}">Regresar al inicio</a> 
    
</body>
</html>