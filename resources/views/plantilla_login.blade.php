<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/app.cs')}}" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Elecciones</title>
</head>
<body>
    <header>
        <div class="row">
            <div class="col-md-2">
                <img src="https://www.voaxaca.tecnm.mx/wp-content/uploads/2020/05/itvo.ico" width="100px" style="margin: 7%;">
            </div>
            <div class="col-md-8 text-center">
                <h1>Instituto Tecnológico del Valle de Oaxaca</h1>
                <h5>Elección de la Reina ITVO</h5>
            </div>
            <div class="col-md-2">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/TecNM_logo.png" width="150px" style="margin: 7%;">
            </div>

        </div>
    </header>
    <main>
    <div class="container">
        @yield('content')
    </div>
    </main>
    <footer class="bg-dark text-center text-lg-start">
        <div class="text-center p-3 text-light fixed-bottom bg-dark">
        © 2020 Copyright:
        <a class="text-light" href="https://github.com/Febolutions/proyectoLaravel.git">Febolutions</a>
    </div>
</footer>
    <script src="{{asset('app.js')}}" type="text/js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/844dec5863.js" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
</body>
</html>