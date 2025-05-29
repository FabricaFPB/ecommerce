<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/index.css', 'resources/css/header.css', 'resources/css/footer.css','resources/css/profile.css' ])
</head>
<body>
    @include('partials.header')
    
    <div class="container profile-container">
        <div class="profile-header">
            <div class="profile-pic">
                <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp&f=y" alt="Foto de Perfil">
            </div>
            <h5>Silvinha</h5>
            <p class="grey-text">Membro desde Março 2023</p>
        </div>
        
        <div class="card-action-profile">
            <a href="#" class="btn-flat">
                <i class="material-icons">shopping_cart</i>
                <span>Pedidos</span>
            </a>
            <a href="#" class="btn-flat">
                <i class="material-icons">favorite</i>
                <span>Favoritos</span>
            </a>
            <a href="#" class="btn-flat">
                <i class="material-icons">settings</i>
                <span>Configurações</span>
            </a>
        </div>
        
        <div class="divider"></div>
        
        <div class="menu-items">
            <div class="menu-item">
                <a href="#">
                    <span>Chats pendentes</span>
                    <span class="item-count">2 <i class="material-icons tiny">chevron_right</i></span>
                </a>
            </div>
            
            <div class="menu-item">
                <a href="#">
                    <span>Produtos favoritos</span>
                    <span><i class="material-icons tiny">chevron_right</i></span>
                </a>
            </div>
            
            <div class="menu-item">
                <a href="#">
                    <span>Meus endereços</span>
                    <span><i class="material-icons tiny">chevron_right</i></span>
                </a>
            </div>
            
            <div class="menu-item">
                <a href="#">
                    <span>Métodos de pagamento</span>
                    <span><i class="material-icons tiny">chevron_right</i></span>
                </a>
            </div>
        </div>
        
        <div class="divider"></div>
        
        <div class="menu-items">
            <div class="menu-item">
                <a href="#">
                    <span>Histórico de compras</span>
                    <span><i class="material-icons tiny">chevron_right</i></span>
                </a>
            </div>
            
            <div class="menu-item">
                <a href="#">
                    <span>Cupons de desconto</span>
                    <span><i class="material-icons tiny">chevron_right</i></span>
                </a>
            </div>
            
            <div class="menu-item">
                <a href="#">
                    <span>Ajuda</span>
                    <span><i class="material-icons tiny">chevron_right</i></span>
                </a>
            </div>
            
            <div class="menu-item" style="color: #f44336;">
                <a href="#" style="color: #f44336;">
                    <span>Sair da conta</span>
                    <span><i class="material-icons tiny">logout</i></span>
                </a>
            </div>
        </div>
    </div>
    
    @include('partials.footer')
</body>
</html>