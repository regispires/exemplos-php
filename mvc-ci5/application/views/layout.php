<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MVC com CodeIgniter</title>
	<link href="<?= site_url("/css/bootstrap.min.css") ?>" rel="stylesheet">
	<link href="<?= site_url("/css/sticky-footer-navbar.css") ?>" rel="stylesheet">
</head>
<body>
<div id="wrap">
  <!-- Fixed navbar -->
<?php if ($this->session->userdata('usuario')) { ?>
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?= site_url("/") ?>">Aplicação Exemplo</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li <?= isset($active_home) ? "class=\"active\"" : '' ?> ><a href="<?= site_url("/") ?>">Home</a></li>
          <li <?= isset($active_sobre) ? "class=\"active\"" : '' ?> ><a href="<?= site_url("/inicio/sobre") ?>">Sobre</a></li>
          <li <?= isset($active_pessoas) ? "class=\"active\"" : '' ?> ><a href="<?= site_url("/pessoas") ?>">Pessoas</a></li>
          <li <?= isset($active_usuarios) ? "class=\"active\"" : '' ?> ><a href="<?= site_url("/usuarios") ?>">Usuarios</a></li>
          <li><a href="<?= site_url("/login/logout") ?>">Logout (<?= $this->session->userdata('usuario') ?>)</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>	
<?php } ?>
	<div class="container">
		<?php if ($this->session->flashdata('msg')) { ?>
			<div class="alert alert-warning fade in">
				<a class="close" data-dismiss="alert" href="#" aria-hidden="true">&times;</a>
				<?= $this->session->flashdata('msg') ?>
			</div>
		<?php } ?>
		<?php $this->load->view("cabecalho"); ?>
		<?php $this->load->view($visao); ?>
	</div>
</div>
<div id="footer">
  <div class="container">
    <p class="text-muted">Copyright &copy; 2014 - Universidade Federal do Ceará</p>
  </div>
</div>
<script src="<?= site_url("/js/jquery.min.js") ?>"></script>
<script src="<?= site_url("/js/bootstrap.min.js") ?>"></script>
<script>
	$(".alert").alert();
</script>
</body>
</html>