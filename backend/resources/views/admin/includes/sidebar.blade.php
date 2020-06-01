<form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
    <input type="hidden" name="_token" value="NKN81BvuQSzEbJlULUVrTDRewUlcAIJhPbOwli18"> </form>
<div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white">
        <!--
                  Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

                  Tip 2: you can also add an image using data-image tag
              -->
        <div class="logo">
            <a href="http://imaxinformatica.com.br/" class="simple-text logo-normal">
                {{ __('ImaxCommerce') }}
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <p>{{ __('Dashboard') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#catalog" aria-expanded="true">
                        <i class="material-icons">category</i>

                        <p>{{ __('Catálogo') }}
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse show" id="catalog">
                        <ul class="nav">
                            <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.category.index') }}">
                                    <i class="material-icons">trip_origin</i>
                                    <span class="sidebar-normal">{{ __('Categorias') }} </span>
                                </a>
                            </li>
                            <li class="nav-item{{ $activePage == 'product' ? ' active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.product.index') }}">
                                    <i class="material-icons">trip_origin</i>
                                    <span class="sidebar-normal"> {{ __('Produtos') }} </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('table') }}">
                        <i class="material-icons">content_paste</i>
                        <p>{{ __('Table List') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('typography') }}">
                        <i class="material-icons">library_books</i>
                        <p>{{ __('Typography') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('icons') }}">
                        <i class="material-icons">bubble_chart</i>
                        <p>{{ __('Icons') }}</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('map') }}">
                        <i class="material-icons">location_ons</i>
                        <p>{{ __('Maps') }}</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#">{{$titlePage}}</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">

                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <!-- <form class="navbar-form">
                        <span class="bmd-form-group">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Pesquisar...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </span>
                    </form> -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    Stats
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarNotifications"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">3</span>
                                <p class="d-lg-none d-md-block">
                                    Notificações
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarNotifications">
                                <a class="dropdown-item" href="#">Novo pedido</a>
                                <a class="dropdown-item" href="#">Novo cliente</a>
                                <a class="dropdown-item" href="#">Novo orçamento</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Perfil</a>
                                <a class="dropdown-item" href="#">Configurações</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log
                                    out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>