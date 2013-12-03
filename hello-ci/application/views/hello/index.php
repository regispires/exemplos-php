<?php $this->load->helper('url'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
<h1>Hello World!!!</h1>
<p>Agora na Visão</p>
<p>Nome: <?= $nome ?></p>
<p><img src="<?= site_url('img/codeigniter.png') ?>" /></p>
<p><a href="<?= site_url('hello/acao')?>">Ir para hello-acao usando site_url</a></p>
<p><a href="<?= base_url('hello/acao')?>">Ir para hello-acao usando base_url</a></p>
<p><?= anchor('hello/acao', 'Ir para hello-acao usando anchor') ?></p>
</body>
</html>