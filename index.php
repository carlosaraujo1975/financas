<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Restrito</title>
    <!-- Inclua o link para o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilo personalizado para a imagem de fundo */
        body {
            background: url('img/tech.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        /* Estilo personalizado para o formulário de login */
        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="login-container">
                    <h4 class="text-center mb-4">Acesso Restrito</h4>
                    <form>
                        <div class="form-group">
                            <label for="username">Usuário</label>
                            <input type="text" class="form-control" id="username" placeholder="Digite seu usuário">
                        </div>
                        <div class="form-group">
                            <label for="password">Senha</label>
                            <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Inclua o link para o JavaScript do Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
