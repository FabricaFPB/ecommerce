<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/index.css', 'resources/css/header.css', 'resources/css/footer.css'])

</head>

<body>
    @include('partials.header')
    <div class="bannerArea"></div>

    <div class="row">
        <h5>Categorias mais vendidas</h5>
        @include('partials.cardCategoria', ['titulo' => 'Informática', 'corTitulo' => 'White', 'imagem' => asset('images/imgInformatica.jpg'), 'link' => ''])
        @include('partials.cardCategoria', ['titulo' => 'Beleza', 'corTitulo' => 'White', 'imagem' => asset('images/imgBeleza.jpg'), 'link' => ''])
        @include('partials.cardCategoria', ['titulo' => 'Lazer', 'corTitulo' => 'Blue', 'imagem' => asset('images/imgLazer.jpg'), 'link' => ''])
        @include('partials.cardCategoria', ['titulo' => 'Informática', 'corTitulo' => 'White', 'imagem' => asset('images/imgInformatica.jpg'), 'link' => ''])
    </div>
    <div class="row">
        <h5>Produtos da Categoria</h5>
        <div class="col s12 m6 l6">
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
            <div class="col s12 m6 l6">
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
        <div class="col s12 m6 l6">
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
        <div class="col s12 m6 l6">
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
    </div>
</div>
    @include('partials.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            M.Sidenav.init(elems);
        });
    </script>
</body>

</html>