<h2>Listagem de Usuários</h2>
<p>
<form class="form-inline" role="form" action="<?= site_url('usuarios') ?>" method="POST">
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
	<th>Login</th>
	<th>Perfil</th>
	<th>Ações</th>
	</tr>
	<?php foreach ($usuarios as $item) { ?>
	<tr>
	<td><?= $item->nome ?></td>
	<td><?= $item->login ?></td>
	<td><?= $item->perfil ?></td>
	<td>
	<a href="<?= site_url('usuarios/altera' . '/' . $item->id) ?>">Altera</a>
	<a href="<?= site_url('usuarios/deleta' . '/' . $item->id) ?>" onclick="return confirm('Confirma exclusão?')">
	Exclui</a>
	</td>
	</tr>
	<?php } ?>
</table>
<?= $this->pagination->create_links(); ?>
<form role="form" action="<?= site_url('usuarios/insere') ?>">
	<button type="submit" class="btn btn-primary">Insere usuário</button>
</form>
