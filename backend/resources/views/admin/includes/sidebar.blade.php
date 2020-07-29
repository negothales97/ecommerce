<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">Thales Serrra</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link{{ $activePage == 'dashboard' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link{{ $activePage == 'order' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Pedidos</p>
                    </a>
                </li>
                <li class="nav-item{{ $activePage == 'customer' ? ' active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>Clientes</p>
                    </a>
                </li>
                <li class="nav-item has-treeview {{request()->is('admin/configuracao/*') ? 'menu-open' : ''}} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
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
                            <a href="" class="nav-link {{request()->is('admin/configuracao/social*') ? 'active' : ''}}">
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
                    </ul>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>