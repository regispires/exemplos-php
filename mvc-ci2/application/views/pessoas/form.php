<input type="hidden" name="id"  value="<?= isset($pessoa) ? $pessoa->id : '' ?>"  />
<label for="nome" ><strong> Nome:</strong></label>
<input id="nome" type="text" name="nome" value="<?= isset($pessoa) ? $pessoa->nome : '' ?>"/>
<br/>
<label for="fone"><strong>Telefone:</strong></label>
<input id="fone" type="text" name="fone" value="<?= isset($pessoa) ? $pessoa->fone : '' ?>"  />
<br/>
<label for="email"><strong>E-Mail:</strong></label>
<input id="email" type="email" name="email" value="<?= isset($pessoa) ? $pessoa->email : '' ?>"  />
<br/>
<input type="submit" value="Gravar" />
<a href="<?= site_url('pessoas') ?>">Voltar</a>
