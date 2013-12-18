<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>MVC com CodeIgniter</title>
</head>
<body>
<?php if ($this->session->userdata('usuario') != null) { ?>
  <p>Usuário: <?= $this->session->userdata('usuario') ?></p>
  <p><a href="<?= site_url("/login/logout") ?>">Logout</a>
<?php } ?>
<p><?= $this->session->flashdata('msg') ?></p>
<?php $this->load->view("cabecalho"); ?>
<?php $this->load->view($visao); ?>
</body>
</html>