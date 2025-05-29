<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/header.css', 'resources/css/footer.css'])
</head>

<body>
    @include('partials.header')

    <div class="container">
        <h4>Carrinho de Compras</h4>

        <div class="row">
            <div class="col s12 m8">
                <table class="striped">
                    <thead>
                        <tr>
                            <th width="80">Produto</th>
                            <th>Valor</th>
                            <th width="100">Quantidade</th>
                            <th>Subtotal</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="{{ asset('images/imgBeleza.jpg') }}" width="50" height="50" alt="Secador">
                            </td>
                            <td>R$ 180,99</td>
                            <td>
                                <div class="input-field" style="margin-top: 0;">
                                    <input type="number" min="1" value="1" style="width: 60px; text-align: center;">
                                </div>
                            </td>
                            <td>R$ 180,99</td>
                            <td><a href="#" class="red-text"><i class="material-icons">delete</i></a></td>
                        </tr>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col s12 m4">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Resumo do Pedido</span>

                        <table>
                            <tr>
                                <td>Sub Total:</td>
                                <td class="right-align">R$180,99</td>
                            </tr>
                            <tr>
                                <td>Frete:</td>
                                <td class="right-align">R$30</td>
                            </tr>
                            <tr>
                                <td>Desconto:</td>
                                <td class="right-align">R$10</td>
                            </tr>
                            <tr class="total-row">
                                <td><b>Total:</b></td>
                                <td class="right-align"><b>R$210,99</b></td>
                            </tr>
                        </table>

                        <div class="input-field" style="margin-top: 20px;">
                            <input type="text" id="cep" placeholder="Digite seu CEP">
                            <button class="btn-small grey">Calcular frete</button>
                        </div>

                        <div class="center-align" style="margin-top: 30px;">
                            <a href="#" class="waves-effect waves-light btn-large blue">Finalizar compra</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
</body>

</html>