<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Thales Serrra</a>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link{{ $activePage == 'dashboard' ? ' active' : '' }}">
                        <i class="fas fa-tachometer-alt nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link{{ $activePage == 'order' ? ' active' : '' }}">
                        <i class="fas fa-clipboard-list nav-icon "></i>
                        <p>Pedidos</p>
                    </a>
                </li>
                <li class="nav-item">
                <a href="{{route('admin.customer.index')}}" class="nav-link {{ $activePage == 'customer' ? ' active' : '' }}">
                    <i class="fas fa-users nav-icon"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{request()->is('admin/catalogo/*') ? 'menu-open' : ''}} ">
                    <a href="#" class="nav-link">
                    <i class="fas fa-boxes nav-icon"></i>
                        <p>
                            Catálogo
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{ route('admin.product.index') }}"
                                class="nav-link{{ $activePage == 'product' ? ' active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Produtos</p>
                            </a>
                            <a href="{{ route('admin.category.index') }}"
                                class="nav-link{{ $activePage == 'category' ? ' active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.tag.index')}}"
                                class="nav-link{{ $activePage == 'tag' ? ' active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Tags</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.variation.index')}}"
                                class="nav-link{{ $activePage == 'variation' ? ' active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Variações</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview {{request()->is('admin/configuracao/*') ? 'menu-open' : ''}} ">
                    <a href="#" class="nav-link">
                    <i class="fas fa-percentage nav-icon"></i>
                        <p>
                            Promoções
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="#"
                                class="nav-link{{ $activePage == 'promotion' ? ' active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Cupons de desconto</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#"
                                class="nav-link{{ $activePage == 'promotion' ? ' active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Cronômetro</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#"
                                class="nav-link{{ $activePage == 'promotion' ? ' active' : '' }}">
                                <i class="nav-icon far fa-circle"></i>
                                <p>Frete Grátis</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link {{ $activePage == 'banner' ? ' active' : '' }}">
                    <i class="far fa-image nav-icon"></i>
                        <p>Banners</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link {{ $activePage == 'pages' ? ' active' : '' }}">
                    <i class="far fa-file nav-icon"></i>
                        <p>Páginas</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.contact.index')}}" class="nav-link {{ $activePage == 'contact' ? ' active' : '' }}">
                    <i class="fas fa-phone nav-icon"></i>
                        <p>Contatos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.newsletter.index')}}" class="nav-link {{ $activePage == 'newsletter' ? ' active' : '' }}">
                    <i class="fas fa-newspaper nav-icon"></i>
                        <p>Newsletter</p>
                    </a>
                </li>
                <li class="nav-item{{ $activePage == 'customer' ? ' active' : '' }}">
                    <a href="#" class="nav-link">
                    <i class="fas fa-dolly nav-icon"></i>
                        <p>Transportadoras</p>
                    </a>
                </li>
                <li class="nav-item{{ $activePage == 'customer' ? ' active' : '' }}">
                    <a href="#" class="nav-link">
                    <i class="fas fa-money-bill-wave-alt nav-icon"></i>
                        <p>Pagamento</p>
                    </a>
                </li>
                <li class="nav-item{{ $activePage == 'customer' ? ' active' : '' }}">
                    <a href="#" class="nav-link">
                    <i class="fas fa-cogs nav-icon"></i>
                        <p>Configurações</p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>