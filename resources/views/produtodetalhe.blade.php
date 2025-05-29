<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Secador</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/header.css', 'resources/css/footer.css'])
</head>

<body>
    @include('partials.header')
    <div class="container">
        <div class="row">
            <div class="col s12 m6">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/imgBeleza.jpg') }}" alt="Imagem do produto">
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <h4>Secador</h4>

                <div class="pricing">
                    <p class="grey-text" style="text-decoration: line-through; margin: 0;">De: R$ 220,99</p>
                    <h5 style="color: #FF5722; font-weight: bold; margin: 5px 0;">Por: R$ 180,99</h5>
                    <p class="grey-text">12x s/juros</p>
                </div>

                <div class="actions" style="display: flex; align-items: center; margin-top: 20px;">
                    <a href="#" class="waves-effect waves-light btn blue" style="margin-right: 15px;">
                        <i class="material-icons left">shopping_cart</i>
                        Adicionar no Carrinho
                    </a>
                    <a href="#" class="btn-floating waves-effect waves-light white">
                        <i class="material-icons black-text">favorite_border</i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s12">
                <h5>Descrição:</h5>
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt, explicabo. Nemo enim ipsam voluptatem, quia voluptas sit, aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos, qui ratione voluptatem sequi nesciunt, neque porro quisquam
                    est, qui.
                </p>
            </div>
        </div>
    </div>
    @include('partials.footer')
</body>

</html>