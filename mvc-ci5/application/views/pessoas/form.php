<input type="hidden" name="id"  value="<?= isset($pessoa) ? $pessoa->id : '' ?>"  />
<div class="form-group">
	<label class="col-sm-2 control-label" for="nome" >Nome</label>
	<div class="col-sm-10">
		<input id="nome" class="form-control" type="text" name="nome" value="<?= isset($pessoa) ? $pessoa->nome : '' ?>"/>
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="fone">Telefone</label>
	<div class="col-sm-10">
	<input id="fone" class="form-control" type="text" name="fone" value="<?= isset($pessoa) ? $pessoa->fone : '' ?>"  />
	</div>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label" for="email">E-Mail</label>
	<div class="col-sm-10">
	<input id="email" class="form-control" type="email" name="email" value="<?= isset($pessoa) ? $pessoa->email : '' ?>"  />
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-default">Gravar</button>
	</div>
</div>