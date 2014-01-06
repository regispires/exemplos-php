<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>

	<link href="<?= site_url("/css/bootstrap.min.css") ?>" rel="stylesheet">
	<link href="<?= site_url("/css/signin.css") ?>" rel="stylesheet">
  </head>

  <body>

    <div class="container">
		<?php if ($this->session->flashdata('msg')) { ?>
			<div class="alert alert-warning fade in">
				<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
				<?= $this->session->flashdata('msg') ?>
			</div>
		<?php } ?>

      <form class="form-signin" role="form" action="<?= site_url('login/logar') ?>" method="POST">
        <h2 class="form-signin-heading">Faça seu login</h2>
        <input type="text" class="form-control" placeholder="Usuário" name="usuario" required autofocus>
        <input type="password" class="form-control" placeholder="Senha" name="senha" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      </form>

    </div>
	<script src="<?= site_url("/js/jquery.min.js") ?>"></script>
	<script src="<?= site_url("/js/bootstrap.min.js") ?>"></script>
	<script>
		$(".alert").alert();
	</script>
  </body>
</html>