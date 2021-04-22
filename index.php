<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat@Web</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat@Web</header>
            <form action="#">
                <div class="error-text">Esta é uma mensagem de erro!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>Nome</label>
                        <input type="text" placeholder="Seu nome">
                    </div>
                    <div class="field input">
                        <label>Sobrenome</label>
                        <input type="text" placeholder="Seu sobrenome">
                    </div>
                </div>
                <div class="field input">
                    <label>e-mail</label>
                    <input type="email" placeholder="Seu e-mail">
                </div>
                <div class="field input">
                    <label>Senha</label>
                    <input type="password" placeholder="Informe uma senha">
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <input type="file">
                </div>
                <div class="field button">
                    <input type="submit" value="Continuar para o chat">
                </div>
            </form>
            <div class="link">Já está cadastrado? <a href="#">Entrar agora</a></div>
        </section>
    </div>

    <script src="js/pass-show-hide.js"></script>
</body>
</html>