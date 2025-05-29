<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/header.css', 'resources/css/footer.css', 'resources/css/login.css'])
</head>

<body>
    @include('partials.header')
    
    <div class="container">
        <div class="login-container">
            <h4 class="login-title">Login</h4>
            
            < class="login-form">
                <div class="input-field">
                    <label for="email">Email:</label>
                    <input type="email" id="email" class="validate" required>
                </div>
                
                <div class="input-field">
                    <label for="password">Senha:</label>
                    <input type="password" id="password" class="validate" required>
                </div>
                
                <a href="{{ route('perfil') }} "><button type="submit" class="btn blue btn-login waves-effect waves-light">
                    Acessar
                </button></a>
                
                <div class="login-footer">
                Ainda não possui uma conta? <a href="{{ route('cadastro') }}" class="blue-text">Registre-se</a>
                </div>
            </form>
        </div>
    </div>
    
    @include('partials.footer')
</body>

</html>