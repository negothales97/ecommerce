<div id="menu-mobile" class="animated">
    <div id="mainmenu-mobile" style="display: block;">
        <form id="form-search-mobile" action="#">
            <div id="box-search-mobile" class="input-group float-right">
                <input type="text" value="{{request('search_string')}}" name="search_string" class="form-control"
                    placeholder="Pesquise um produto">
                <img src="{{asset('img/search-dark.png')}}" alt="Buscar" width="40" class="search-button">
            </div>
        </form>
        <div class="row">
            <div class="col">
                <p class="title-item-menu">Menu</p>
            </div>
        </div>
        <button class="w-submenu" id="product-menu">Produtos</button>
        <button >Empresa</button>
        <button>Seja um revendedor</button>
        <button >Fale conosco</button>
        <button>Pós-venda</button>
        <div class="row">
            <div class="col">
                <p class="title-item-menu">Acesso</p>
            </div>
        </div>
        <button>Área do revendedor</button>
        <button>Área do representante</button>
        <button>Área do vendedor de loja</button>
    </div>
    <div id="submenu-mobile" style="display: none;">
    </div>
</div>