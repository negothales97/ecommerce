<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>

        </ul>

        <!-- SEARCH FORM -->

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Notifications Dropdown Menu -->
            @if($activePage == 'product' && request()->is('admin/catalogo/produtos/edit*'))
            <li class="nav-item ">
                <a href="#" id="btnUpdateProduct" class="btn btn-info">Atualizar</a>
            </li>
            @endif
            <li class="nav-item">

                <a class="nav-link" href="{{url('logout')}}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </nav>
    <form id="logout-form" action="{{ url('admin/logout') }}" method="POST" style="display: none;">
        @csrf</form>