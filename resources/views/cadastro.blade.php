<!-- filepath: c:\xampp\htdocs\ecommerce-fabrica\resources\views\login.blade.php -->
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/cadastro.css'])
</head>

<body>
    @include('partials.header')
    
    <div class="container">
        <div class="login-container">
            <h4 class="login-title">Cadastro</h4>
            
            <form class="login-form">
                <div class="input-field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="validate" required>
                </div>
                
                <div class="input-field">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" class="validate" required>
                </div>
                
                <div class="input-field">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" class="validate" required>
                </div>
                
                <div class="input-field">
                    <label for="confirm-password">Confirmar senha:</label>
                    <input type="password" id="confirm-password" class="validate" required>
                </div>
                
                <button type="submit" class="btn blue btn-login waves-effect waves-light">
                    Criar conta
                </button>
                
                <div class="login-footer">
                    Já tem uma conta? <a href="#" class="blue-text">Log-in</a>
                </div>
            </form>
        </div>
    </div>
    
    @include('partials.footer')
</body>

</html>