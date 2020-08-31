<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <form method="post" enctype="multipart/form-data" action="fileform.php">
            <div>
                <br>
                <label for="nome">Nome</label>
                <br>
                <input type="text" placeholder="Nome" name="nome">
                <br>
            </div>
            <div>
                <br>
                <label for="email">E-mail</label>
                <br>
                <input type="email" placeholder="E-mail" name="email">
                <br>
            </div>
            <div>
                <br>
                <label for="password">Senha</label>
                <br>
                <input type="password" placeholder="Senha" name="password">
                <br>
            </div>
            <div>
                <br>
                <label for="password">Confirme sua Senha</label>
                <br>
                <input type="password" placeholder="Digite sua senha novamente" name="password">
                <br>
            </div>
            <div>
                <br>
                <label for="photo">Foto</label>
                <br>
                <input type="file" name="photo">
                <br>
            </div>
            <div>
                <br>
                <button type="submit">Enviar</button>            
            </div>
        </form>    
    </section>
    
</body>
</html>