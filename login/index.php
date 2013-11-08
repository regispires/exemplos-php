<?php
  session_start();
  $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null;
?>
<html>
  <head>
    <meta http-equiv="content-type"
          content="text/html;charset=UTF-8" />
    <title>Página inicial</title>
  </head>
  <body>
    <h1>Nossa aplicação</h1>
    <?php if ($usuario != null) { ?>
    <p><?php echo $usuario; ?>, seja bem-vindo ao nosso
         site. Clique <a href="sair.php">aqui</a>
         para sair.</p>
    <?php } else { ?>
      <p>É necessário fazer <a href="login.php">Login
         </a> para acessar o sistema.</p>
    <?php } ?>
  </body>
</html>
