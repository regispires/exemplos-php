<input type="hidden" name="id"  value="<?= isset($usuario) ? $usuario->id : '' ?>"  />
<div class="form-group">
	<label class="col-sm-2 control-label" for="nome" >Nome</label>
	<div class="col-sm-10">
		<input id="nome" class="form-control" type="text" name="nome" value="<?= isset($usuario) ? $usuario->nome : '' ?>"/>
	</div>
</div>
<div class="form-group">
<label class="col-sm-2 control-label" for="login">Login</label>
	<div class="col-sm-10">
		<input id="login" class="form-control" type="text" name="login" value="<?= isset($usuario) ? $usuario->login : '' ?>"  />
	</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" for="senha">Senha</label>
	<div class="col-sm-10">
		<input id="senha" class="form-control" type="password" name="senha" />
	</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" for="confirma_senha">Confirma Senha</label>
	<div class="col-sm-10">
		<input id="confirma_senha" class="form-control" type="password" name="confirma_senha" />
	</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label" for="perfil">Perfil</label>
	<div class="col-sm-10">
		<input id="perfil" class="form-control" type="perfil" name="perfil" value="<?= isset($usuario) ? $usuario->perfil : '' ?>"  />
	</div>
</div>

<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-default">Gravar</button>
	</div>
</div>