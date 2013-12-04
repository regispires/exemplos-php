<h1>Listagem de Pessoas</h1>
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
