<h2>Listagem de Pessoas</h2>
<p>
<form class="form-inline" role="form" action="<?= site_url('pessoas') ?>" method="POST">
	<div class="form-group">
		<label class="sr-only" for="texto">Texto de busca</label>
		<input id="texto" name="texto" class="form-control" value="<?= $texto ?>"/>
	</div>
	<button type="submit" class="btn btn-default">Buscar</button>
</form>
</p>
<table class="table">
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
<?= $this->pagination->create_links(); ?>
<form role="form" action="<?= site_url('pessoas/insere') ?>">
	<button type="submit" class="btn btn-primary">Insere pessoa</button>
</form>
