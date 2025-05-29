<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Beleza</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/index.css', 'resources/css/header.css', 'resources/css/footer.css'])
</head>
<body>
    @include('partials.header')
    
    <div class="category-banner" style="background-image: url('{{ asset('images/imgBeleza.jpg') }}'); height: 200px; background-size: cover; background-position: center; position: relative;">
        <div style="position: absolute; bottom: 0; left: 0; right: 0; background-color: rgba(0,0,0,0.5); padding: 20px;">
            <div class="container">
                <h3 class="white-text">Beleza</h3>
                <p class="white-text">Produtos para realçar sua beleza natural</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row" style="margin-top: 20px; margin-bottom: 0;">
            <nav style="background: transparent; box-shadow: none;">
                <div class="nav-wrapper">
                    <div class="col s12">
                        <a href="{{ route('index') }}" class="breadcrumb grey-text">Home</a>
                        <a href="#!" class="breadcrumb blue-text">Beleza</a>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="row">
            <div class="col s12 m3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Filtros</span>
                        
                        <p class="bold">Preço</p>
                        <p class="range-field">
                            <input type="range" min="0" max="500" />
                        </p>
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col s6">R$ 0</div>
                            <div class="col s6 right-align">R$ 500</div>
                        </div>
                        
                        <p class="bold">Marcas</p>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>L'Oréal</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>Dove</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>Nivea</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>Neutrogena</span>
                            </label>
                        </p>
                        
                        <p class="bold" style="margin-top: 20px;">Avaliações</p>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                </span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny">star_border</i>
                                </span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input type="checkbox" class="filled-in" />
                                <span>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny yellow-text text-darken-2">star</i>
                                    <i class="material-icons tiny">star_border</i>
                                    <i class="material-icons tiny">star_border</i>
                                </span>
                            </label>
                        </p>
                        
                        <div class="center-align" style="margin-top: 20px;">
                            <button class="btn blue waves-effect waves-light">Aplicar Filtros</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col s12 m9">
                <div class="row">
                    <div class="col s12">
                        <div class="right-align">
                            <label>Ordernar por:</label>
                            <div class="input-field inline" style="margin: 0; width: 200px;">
                                <select>
                                    <option value="1">Mais Relevantes</option>
                                    <option value="2">Menor Preço</option>
                                    <option value="3">Maior Preço</option>
                                    <option value="4">Mais Vendidos</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col s6 m6 l4">
                        @include('partials.cardProduto', [
                            'link' => route('produtodetalhe'),
                            'titulo' => 'Secador Profissional',
                            'imagem' => asset('images/imgBeleza.jpg'),
                            'corTitulo' => 'Black',
                            'corDesc' => 'Secador potente com 3 velocidades',
                            'precoProduto' => 'Por R$ 180,99',
                            'precoAntigo' => 'De R$ 220,99'
                        ])
                    </div>
                    
                    <div class="col s6 m6 l4">
                        @include('partials.cardProduto', [
                            'link' => route('produtodetalhe'),
                            'titulo' => 'Chapinha Alisadora',
                            'imagem' => asset('images/imgBeleza.jpg'),
                            'corTitulo' => 'Black',
                            'corDesc' => 'Chapinha profissional de cerâmica',
                            'precoProduto' => 'Por R$ 149,90',
                            'precoAntigo' => 'De R$ 199,90'
                        ])
                    </div>
                    
                    <div class="col s6 m6 l4">
                        @include('partials.cardProduto', [
                            'link' => route('produtodetalhe'),
                            'titulo' => 'Shampoo Hidratante',
                            'imagem' => asset('images/imgBeleza.jpg'),
                            'corTitulo' => 'Black',
                            'corDesc' => 'Shampoo para cabelos secos',
                            'precoProduto' => 'Por R$ 29,99',
                            'precoAntigo' => 'De R$ 39,99'
                        ])
                    </div>
                    
                    <div class="col s6 m6 l4">
                        @include('partials.cardProduto', [
                            'link' => route('produtodetalhe'),
                            'titulo' => 'Condicionador',
                            'imagem' => asset('images/imgBeleza.jpg'),
                            'corTitulo' => 'Black',
                            'corDesc' => 'Condicionador para todos os tipos de cabelo',
                            'precoProduto' => 'Por R$ 25,90',
                            'precoAntigo' => 'De R$ 32,90'
                        ])
                    </div>
                    
                    <div class="col s6 m6 l4">
                        @include('partials.cardProduto', [
                            'link' => route('produtodetalhe'),
                            'titulo' => 'Kit Maquiagem',
                            'imagem' => asset('images/imgBeleza.jpg'),
                            'corTitulo' => 'Black',
                            'corDesc' => 'Kit completo com 12 itens',
                            'precoProduto' => 'Por R$ 89,90',
                            'precoAntigo' => 'De R$ 129,90'
                        ])
                    </div>
                    
                    <div class="col s6 m6 l4">
                        @include('partials.cardProduto', [
                            'link' => route('produtodetalhe'),
                            'titulo' => 'Base Líquida',
                            'imagem' => asset('images/imgBeleza.jpg'),
                            'corTitulo' => 'Black',
                            'corDesc' => 'Base de longa duração',
                            'precoProduto' => 'Por R$ 45,90',
                            'precoAntigo' => 'De R$ 59,90'
                        ])
                    </div>
                </div>
                
                <div class="row center-align">
                    <ul class="pagination">
                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                        <li class="active blue"><a href="#!">1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    @include('partials.footer')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            M.FormSelect.init(elems);
            
            var sideNav = document.querySelectorAll('.sidenav');
            M.Sidenav.init(sideNav);
        });
    </script>
</body>

</html>