<header>
    <nav class="nav-wrapper">
        <div class="container">
            <a href="#" data-target="mobile-menu" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>

            <a href="{{ route('index') }}" class="brand-logo left hide-on-med-and-down" style="margin-left: 15px;">
                E-commerce
            </a>

            <ul class="center-menu hide-on-med-and-down">
                <li><a href="{{ route('categoria') }}">Beleza</a></li>
                <li><a href="#">Informática</a></li>
                <li><a href="#">Lazer</a></li>
                <li><a href="#">Beleza</a></li>
            </ul>

            <ul class="right nav-icons">
                <li><a href="#"><i class="material-icons">favorite_border</i></a></li>
                <li><a href="{{ route('carrinho') }}"><i class="material-icons">shopping_cart</i></a></li>
                <li><a href="{{ route('login') }}"><i class="material-icons">account_circle</i></a></li>
            </ul>
        </div>
    </nav>
    <div class="searchBar">
        <div class="container">
            <div class="search-wrapper">
                <div class="input-field" style="margin: 0;">
                    <i class="material-icons prefix white-text">search</i>
                    <input id="search" type="text" class="white-text" placeholder="Buscar produtos...">
                    <label for="search" class="hide">Buscar</label>
                </div>
            </div>
        </div>
    </div>
    <ul class="sidenav" id="mobile-menu">
        <li><a href="#">Promoções</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Categorias</a></li>
        <li><a href="#">Departamentos</a></li>
    </ul>
</header>