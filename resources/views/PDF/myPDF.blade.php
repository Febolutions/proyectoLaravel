<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @page{
            margin: 0cm 0cm;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin: 2cm;
        }
        header{
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0 cm;
            height: 2cm;
            background-color: #191c44;
            color: #c4c4c8;
            text-align: center;
            line-height: 1.5cm;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #191c44;
            color: white;
            text-align:center;
            line-height: 1.5cm;
        }
        #casillasLista {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        #casillasLista td, #casillasLista th {
            border: 1px solid #c4c4c8;
            padding: 8px;
        }
        #casillasLista th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #7c7c7c;
            color: white;
        }
        .pagenum:before{
            content: counter(page);
        }
    </style>
    <title>Document</title>
</head>
<body>
    <header>
        <h2>{{ $title }}</h2>
    </header>
    <main>
        <h3>Lista de Casillas</h3>
    <p>Fecha: {{ $date }}</p>
    <table id="casillasLista">
        <thead>
            <tr>
                <th>ID</th>
                <th>UBICACION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($casillas as $casilla)
            <tr>
                <td>{{$casilla->id}}</td>
                <td>{{$casilla->ubicacion}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </main>
    <footer>
        <span class="pagenum"></span>
    </footer>
</body>
</html>