<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <a href="{{url('/')}}"><img id="logo" src="{{asset('img/logo.png')}}"></a>
            </div>
            <div class="col-5">
                <div class="box-search">
                    <form>
                        <input placeholder="Procure seu produto...">
                        <button type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-4">
                <div id="box-user">
                    <i class="icon-user"></i>
                    <a href="#"><strong>Entre</strong><br>ou cadastre-se</a>
                </div>
                <div id="box-bag">
                    <i class="icon-bag"></i>
                    <a href="#"><strong>Sacola</strong><br>2 itens na sacola</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <ul id="main-menu">
                        <li><a href="#"><strong>Masculino</strong></a></li>
                        <li><a href="#"><strong>Feminino</strong></a></li>
                        <li><a href="#">Atacado</a></li>
                        <li><a href="#">Lojas</a></li>
                        <li><a href="#">Fale Conosco</a></li>
                        <li><a href="#">Trabalhe Conosco</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<header id="header-mobile">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="btn-toggle">
                    <div class="row-menu-toggle"></div>
                    <div class="row-menu-toggle-small"></div>
                    <div class="row-menu-toggle"></div>
                    <div class="row-menu-toggle-small"></div>
                </div>
            </div>
            <div class="col-8">
                <a href="{{url('/')}}"><img id="logo" src="{{asset('img/logo.png')}}"></a>
            </div>
            <div class="col-2">
                <div id="box-bag-mobile">
                    <i class="icon-bag"></i>
                    <div class="items-bag"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="box-search">
                    <form>
                        <input placeholder="Procure seu produto...">
                        <button type="submit"><i class="icon-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="menu-mobile">
        <div id="close-menu"><img src="{{ asset('img/arrow-left.png') }}" alt="Icon">Fechar menu</div>
        <ul id="main-menu-mobile">
            <li><img src="{{ asset('img/atacado.png') }}" alt="Icon">Atacado</li>
            <li><img src="{{ asset('img/conta.png') }}" alt="Icon">Minha conta</li>
            <li><img src="{{ asset('img/lojas.png') }}" alt="Icon">Lojas</li>
            <li><img src="{{ asset('img/fone.png') }}" alt="Icon">Fale conosco</li>
            <li><img src="{{ asset('img/trabalhe.png') }}" alt="Icon">Trabalhe conosco</li>
        </ul>
        <p>Escolha uma categoria</p>
        <ul id="category">
            <li>Moda masculina <img src="{{ asset('img/arrow-right.png') }}" alt="Icon"></li>
            <li>Moda feminina <img src="{{ asset('img/arrow-right.png') }}" alt="Icon"></li>
        </ul>
    </div>
</header>

<div id="overlay"></div>