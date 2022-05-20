<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <table>
        <thead style="background-color: blue; ">
        <tr>
            <th>BIEN</th>
            <th>CATEGORÍA</th>
            <th>ESTATUS</th>
            <th>ID_INVENTARIO</th>
            <th>MARCA</th>
            <th>MODELO</th>
            <th>NO_INVENTARIO</th>
            <th>OBSERVACIONES</th>
            <th>SERIE</th>
            <th>ÁREA</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inventarios as $inventario)
            <tr>
                <td>{{ $inventario['Bien'] }}</td>
                <td>{{ $inventario['Categoria'] }}</td>
                <td>{{ $inventario['Estatus'] }}</td>
                <td>{{ $inventario['ID_Inventario'] }}</td>
                <td>{{ $inventario['Marca'] }}</td>
                <td>{{ $inventario['Modelo'] }}</td>
                <td>{{ $inventario['No_inventario'] }}</td>
                <td>{{ $inventario['Observaciones'] }}</td>
                <td>{{ $inventario['Serie'] }}</td>
                <td>{{ $inventario['area'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</body>
</html>
