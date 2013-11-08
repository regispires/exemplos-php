<?php
  session_start();
  $usuario = isset($_POST['usuario']) ? $_POST['usuario'] : null;
  $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
  // A senha eh 12345
  if ($usuario == 'regis' && sha1($senha) == '8cb2237d0679ca88db6464eac60da96345513964') {
     $_SESSION['usuario'] = $usuario;
     header('Location: index.php');
     exit;    
  } else {
     if ($usuario && $senha)
        $mensagem = 'Usuário e/ou senha inválido(s). Tente novamente...';
     else
        $mensagem = null;
  }
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <title>Página de Login</title>
  </head>
  <body>
    <h1>Login</h1>
    <?php if ($mensagem != null) {
      echo "<p>$mensagem</p>";
    } ?>
    <form action="login.php" method="POST">
      <p>Usuário: <input type="text" name="usuario" /></p>
      <p>Senha: <input type="password" name="senha" /></p>
      <p><input type="submit" />
    </form>
  </body>
</html>
