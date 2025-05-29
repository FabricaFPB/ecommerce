<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/index.css', 'resources/css/header.css','resources/css/footer.css'])

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
        <h5>Produtos mais vendidos</h5>
        @include('partials.cardProduto', ['titulo' => 'Secador', 'imagem' => asset('images/imgBeleza.jpg'), 'corTitulo' => 'Black', 'corDesc' => 'Secador de cabelo', 'precoProduto' => 'Por R$ 180,99', 'precoAntigo' => 'De R$ 220,99'])
        @include('partials.cardProduto', ['titulo' => 'Placa Mãe', 'imagem' => asset('images/imgInformatica.jpg'), 'corTitulo' => 'White', 'corDesc' => 'Placa mãe', 'precoProduto' => 'Por R$ 679,99', 'precoAntigo' => 'De R$ 999,99'])
        @include('partials.cardProduto', ['titulo' => 'Livro', 'imagem' => asset('images/imgLazer.jpg'), 'corTitulo' => 'Blue', 'corDesc' => 'Livro', 'precoProduto' => 'Por R$ 55,99', 'precoAntigo' => 'De R$ 69,99'])
        @include('partials.cardProduto', ['titulo' => 'Jogo de tabuleiro', 'imagem' => asset('images/imgLazer.jpg'), 'corTitulo' => 'Blue', 'corDesc' => 'Jogo de tabuleiro', 'precoProduto' => 'Por R$ 129,99', 'precoAntigo' => 'De R$ 159,99'])
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