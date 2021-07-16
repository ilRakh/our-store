<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../materialize/css/materialize.css">
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

    <div class="row">
        <div class="col l2"></div>
        <div class="col l2">
            <h4 class="filters-header-text">Añadir Filtros</h4>
        </div>
    </div>
    <div class="row">
        <div class="col l2"></div>
        <div class="col l2">
            <section class="my-filters-section">
                <ul class="collapsible expandable">
                    <li class="active">
                        <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                        <div class="my-filter-section-content collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                        <div class="my-filter-section-content collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="my-filter-section-content collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="my-filter-section-content collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="my-filter-section-content collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="my-filter-section-content collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                        <div class="my-filter-section-content collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </section>
        </div>
        <div class="col l6 m4 s12">
            <section class="prod-section">
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="https://www.blogdenotebooks.com.ar/wp-content/uploads/2010/04/commodore-ke-7011-mb.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                        <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="https://images-na.ssl-images-amazon.com/images/I/81kgBYKLukL._AC_UL200_SR200,200_.jpg">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                        <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="https://lorempixel.com/100/190/nature/6">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                        <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="https://lorempixel.com/100/190/nature/6">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                        <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                        <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../materialize/js/materialize.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="js/materialize-tools.js"></script>
</body>
</html>