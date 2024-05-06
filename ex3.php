<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
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
    <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
       Massa: <input type="number" name="m" required><br>
        Volume:  <input type="number" name="v" required><br>
        
        <input type="submit" value="Calcular">
<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $massa = $_POST['m'];
     $volume = $_POST['v'];

      if ($volume != 0){
        $calc = $massa / $volume;
      echo "<p>O resultado da operação é $calc</p>";
       }
      else{
      echo "<p>Essa operação não pode ser concluída.</p>";
      }
      }
 ?>
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