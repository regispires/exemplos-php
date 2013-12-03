<?php $this->load->helper('url'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ação</title>
</head>
<body>
<h1>Minha ação</h1>
<p>Agora na Visão</p>
<p><a href="<?= site_url('hello')?>">Ir para hello-index usando site_url</a></p>
<p><a href="<?= base_url('hello')?>">Ir para hello-index usando base_url</a></p>
<p><?= anchor('hello', 'Ir para hello-index usando anchor') ?></p>
</body>
</html>