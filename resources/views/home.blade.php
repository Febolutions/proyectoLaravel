<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    #bodyP{
        background-image: linear-gradient(to top, #d299c2 0%, #fef9d7 100%);
        background-repeat: no-repeat;
        background-size: 100% 600px, cover;
    }
    #reina, #reina2{
        margin-top: 4%;
    }
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body id="bodyP">
    <header>
        <div role="navigation">
            <nav class="navbar navbar-nav navbar-expand-lg navbar-dark bg-dark">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="/home">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Candidato
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/candidato/create">Crear</a>
                                <a class="dropdown-item" href="/candidato">Consultar</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Casilla
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/casilla/create">Crear</a>
                                <a class="dropdown-item" href="/casilla">Lista</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Elecciones
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/eleccion/create">Crear</a>
                                <a class="dropdown-item" href="/eleccion">Lista</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Voto
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/voto/create">Crear</a>
                                <a class="dropdown-item" href="/voto">Lista</a>
                                <a class="dropdown-item" href="/grafica-votos">Gráfica</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <h1 id="reina" class="text-center">Elecciones Reina ITVO 2022</h1>
            <h3 class="text-center">Instituto Tecnológico del Valle de Oaxaca</h3>
            <img id="reina2" src="https://uvm.mx/storage/app/uploads/public/eae/f7d/8a4/thumb__0_0_0_0_crop.jpg" class="rounded mx-auto d-block" alt="Cinque Terre" width="350px"> 
            <h2 class="text-center">BIENVENIDO</h2>
        </div>
    </main>
    <footer class="bg-dark text-center text-lg-start">
        <div class="text-center p-3 text-light bg-dark">
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
