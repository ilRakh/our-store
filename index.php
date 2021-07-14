<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="materialize/css/materialize.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="navbar-fixed">
        <nav class="my-nav">
            <div class="nav-wrapper">
                <div class="row">
                    <div class="col s6">
                        <a href="#!" class="brand-logo my-logo" title="PixiShop"><i class="material-icons">cloud</i>Logo</a>
                    </div>
        
                    <div class="col s6">
        
                        <ul class="right hide-on-med-and-down">
                            <li><a href="" title="Mi Carrito"><i class="material-icons">shopping_cart</i></a></li>
                            <li><a href="" title="Login"><i class="material-icons">person</i></a></li>
        
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" required>
                                    <label class="label-icon my-label-search" for="search">
                                        <i class="material-icons my-search-icon">search</i>
                                    </label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </nav>
    </div>
    
    <ul id="slide-out" class="sidenav my-sidenav">
        <br>
        <li><a href="#" class="sidenav-close"><i class="material-icons ">arrow_back</i>Cerrar</a></li>
        <br>
        <li><a href="#!"><i class="material-icons">home</i>Menu Principal</a></li>
        <br>
        <li><a href="#!"><i class="material-icons">videogame_asset</i>Videojuegos</a></li>
        <br>
        <li><a href="#!"><i class="material-icons">desktop_windows</i>PC Componentes</a></li>
        <br>
        <li><a href="#!"><i class="material-icons">headset</i>Accesorios</a></li>
        <br>
        <li><a href="#!"><i class="material-icons">weekend</i>Muebles</a></li>
    </ul>

    <div class="my-navbar-fixed">
        <ul class="my-lnav">
            <li class="my-lnav-tab">
                <a data-target="slide-out" class="my-lnav-item sidenav-trigger show-on-large" href="#" title="Abrir">
                    <div class="my-align-icon">
                        <i class="material-icons">arrow_forward</i>
                    </div>
                    <div class="my-align-text">
                        <i>Abrir</i>
                    </div>
                </a>
            </li>
            <li class="my-lnav-tab">
                <a class="my-lnav-item" href="#" title="Menu Principal">
                    <div class="my-align-icon">
                        <i class="material-icons">home</i>
                    </div>
                </a>
            </li>
            <li class="my-lnav-tab">
                <a class="my-lnav-item" href="#" title="Videojuegos">
                    <div class="my-align-icon">
                        <i class="material-icons">videogame_asset</i>
                    </div>
                </a>
            </li>
            <li class="my-lnav-tab">
                <a class="my-lnav-item" href="#" title="PC Componentes">
                    <div class="my-align-icon">
                        <i class="material-icons">desktop_windows</i>
                    </div>
                </a>
            </li>
            <li class="my-lnav-tab">
                <a class="my-lnav-item" href="#" title="Accesorios">
                    <div class="my-align-icon">
                        <i class="material-icons">headset</i>
                    </div>
                </a>
            </li>
            <li class="my-lnav-tab">
                <a class="my-lnav-item" href="#" title="Muebles">
                    <div class="my-align-icon">
                        <i class="material-icons">weekend</i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
  
    <div class="carousel carousel-slider center">
        <div class="carousel-fixed-item center">
        </div>
        <div class="carousel-item red white-text" href="#one!">
            <h2>Sorteo</h2>
        </div>
        <div class="carousel-item amber white-text" href="#two!">
            <h2>Oferta 1</h2>
        </div>
        <div class="carousel-item green white-text" href="#three!">
            <h2>Promocion</h2>
        </div>
        <div class="carousel-item blue white-text" href="#four!">
            <h2>Oferta 2</h2>
        </div>
    </div>

    <br><br><br><br><br>

    <div class="row">
        <div class="col l2"></div>
        <div class="col l8">
            <h4>Seccion 1</h4>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col l2"></div>
        <div class="col l2">
            <section class="prod-section-type-1">
                <div class="prod-preview valign-wrapper">
                    <h5 class="texto-prueba">Producto</h5>
                </div>
            </section>
        </div>
        <div class="col l2">
            <section class="prod-section-type-1">
                <div class="prod-preview valign-wrapper">
                    <h5 class="texto-prueba">Producto</h5>
                </div>
            </section>
        </div>
        <div class="col l2">
            <section class="prod-section-type-1">
                <div class="prod-preview valign-wrapper">
                    <h5 class="texto-prueba">Producto</h5>
                </div>
            </section>
        </div>
        <div class="col l2">
            <section class="prod-section-type-1">
                <div class="prod-preview valign-wrapper">
                    <h5 class="texto-prueba">Producto</h5>
                </div>
            </section>
        </div>

    </div>

    <br><br>


    <div class="row">
        <div class="col l2"></div>
        <div class="col l8">
            <h4>Seccion 2</h4>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col l2"></div>
        <div class="col l8">
            <section class="prod-section-type-2">
                <div class="prod-preview  valign-wrapper">
                    <h5 class="texto-prueba">Producto</h5>
                </div>
            </section>
        </div>
    </div>



    <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="materialize/js/materialize.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>