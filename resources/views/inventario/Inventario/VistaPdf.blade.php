<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }

        th{
            text-transform: uppercase;
            font-size: 13px;
            color: white;
            width: 75px; /*Ancho*/
            border: white 2px solid;

        }

        td{
            text-align: center;
            font-size: 13px;
            width: 75px; /*Ancho*/
            border: black 2px solid;
            height: auto;
        }
        table {
          border-collapse: collapse;
        }
        tbody {
          border: black 2px solid;
        }





    </style>
    </head>
    <body>
        <h1>Lista de inventario</h1>
        <hr>
        <div class="contenido">
            <table>
                <thead style="background-color: blue;">
                <tr>
                    <th>BIEN</th>
                    <th>CATEGORÍA</th>
                    <th>ESTATUS</th>
                    <th>ID_INVENTARIO</th>
                    <th>MARCA</th>
                    <th>MODELO</th>
                    <th>NO_INVENTARIO</th>
                    <th>OBSERVACIÓNES</th>
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
        </div>
    </body>
</html>