<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD de registros</h1>
    <a href="{{ route('registros.create') }}">Ingresar nuevo registro</a>
    <p>Tabla de registros: </p>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Telefono</th>
                <th>Tipo de producto</th>
                <th>Cantidad-Unidades</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($registros as $registro)
            <tr>
                <td>{{ $registro->id }}</td>
                <td>{{ $registro->cliente }}</td>
                <td>{{ $registro->telefono }}</td>
                <td>{{ $registro->tipo_producto }}</td>
                <td>{{ $registro->cantidad }}</td>
                <td>{{ $registro->descripcion }}</td>
                <td>{{ $registro->precio }}</td>
                <td>{{ $registro->estado }}</td>
                <td><a href="{{route('registros.edit', $registro->id)}}">Clic aqui</a></td>
                <td>
                    <form action="{{ route('registros.destroy', $registro->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Eliminar este registro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>