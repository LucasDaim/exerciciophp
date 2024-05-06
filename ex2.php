<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="nav">
    <a href="index.php"><img  class="logo" src="img/logo.png" alt="logo da UNISUAM"></a>
  <ul>
    <li><a href="index.php" tabindex="1">Index</a></li>
    <li><a href="ex1.php" tabindex="2">Exercício 1</a></li>
    <li><a href="ex2.php" tabindex="3">Exercício 2</a></li>
    <li><a href="ex3.php" tabindex="4">Exercício 3</a></li>
  </ul>
</div>
<div class="fds">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="username">Login: </label>
        <input type="text" id="login" name="login" required><br>

        <label for="senha">Senha: </label>
        <input type="password" id="senha" name="senha" required><br>

        <input type="submit" value="Login">
        
    </form>
        <a href='index.php'><button>Voltar</button></a>

    <?php
    $ava_key = "Lucas";
    $ava_senha = "123";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        if ($login == $ava_key && $senha == $ava_senha) {
            echo "Usuário Autenticado com Sucesso!" ;
        } else {
            echo "Falha na autenticação!";
        }
    }
?>
</div>
<footer>
    Desenvolvido por Lucas Daim Marconi Esteves 
    <br>
    E-mail:
    <br>
    lucasmarconi076@gmail.com
    <br>
    (21)976123765
    <br>
    <a href="https://www.linkedin.com/in/lucas-daim-355780249/" target="_blank"><img src="img/linkedin_black_logo_icon_147114.png" alt="LinkedIn Logo"></a>
    <a href="https://www.instagram.com/lucas_marconi/" target="_blank"><img src="img/instagram_black_logo_icon_147122.png" alt="Instagram Logo"></a>
  </footer>

    
</body>
</html>