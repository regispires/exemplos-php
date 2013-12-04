<h1>Minha ação</h1>
<p>Agora na Visão</p>

<table>
	<tr>
	<th>Nome</th>
	<th>Telefone</th>
	</tr>
<?php foreach ($pessoas as $item) { ?>
	<tr>
	<td><?= $item->nome ?></td>
	<td><?= $item->fone ?></td>
	</tr>
<?php } ?>
</table>

<p><a href="<?= site_url('hello')?>">Ir para hello-index usando site_url</a></p>
<p><a href="<?= base_url('hello')?>">Ir para hello-index usando base_url</a></p>
<p><?= anchor('hello', 'Ir para hello-index usando anchor') ?></p>
