<h2>Listagem de Pessoas</h2>
<img src="<?= site_url('/img/codeigniter.png')?>" />
<form action="<?= site_url('pessoas') ?>" method="POST">
<input name="texto" />
<input type="submit" value="Buscar" />
</form> 
<table>
	<tr>
	<th>Nome</th>
	<th>Telefone</th>
	<th>E-mail</th>
	<th>Ações</th>
	</tr>
	<?php foreach ($pessoas as $item) { ?>
	<tr>
	<td><?= $item->nome ?></td>
	<td><?= $item->fone ?></td>
	<td><?= $item->email ?></td>
	<td>
	<a href="<?= site_url('pessoas/altera' . '/' . $item->id) ?>">Altera</a>
	<a href="<?= site_url('pessoas/deleta' . '/' . $item->id) ?>" onclick="return confirm('Confirma exclusão?')">
	Exclui</a>
	</td>
	</tr>
	<?php } ?>
</table>
<p><a href="<?= site_url('pessoas/insere')?>">Insere pessoa</a></p>
