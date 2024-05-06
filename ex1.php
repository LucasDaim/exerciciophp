<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
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
    
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="nome" name="nome" required><br>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" required><br>

        <label for="repetições">Repetições:</label>
        <input type="number" id="repetições" name="repetições" min="1" required><br>

        <input type="submit" value="Enviar">
    <ol>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = htmlspecialchars(trim($_POST["nome"]));
            $sobrenome= htmlspecialchars(trim($_POST["sobrenome"]));
            $repetições = intval($_POST["repetições"]);

            if (!empty($nome) && !empty($sobrenome) && $repetições >= 1) 
            for ($i = 0; $i < $repetições; $i++) {
                echo "<li> $nome </li>";
                echo "<li> $sobrenome </li>";

          }
                
            }      
        ?>
    </ol>
    </form>
    <a href='index.php'><button>Voltar</button></a>
    
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