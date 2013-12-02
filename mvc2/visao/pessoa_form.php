<input type="hidden" name="controlador" value="pessoa" />
<input type="hidden" name="id"  value="<?= isset($pessoa) ? $pessoa-> getId() : '' ?>"  />
<label for="nome" ><strong> Nome:</strong></label>
<input id="nome" type="text" name="nome" value="<?= isset($pessoa) ? $pessoa -> getNome() : '' ?>"/>
<br/>
<label for="fone"><strong>Telefone:</strong></label>
<input id="fone" type="text" name="fone" value="<?= isset($pessoa) ? $pessoa -> getFone() : '' ?>"  />
<br/>
<label for="email"><strong>E-Mail:</strong></label>
<input id="email" type="email" name="email" value="<?= isset($pessoa) ? $pessoa -> getEmail() : '' ?>"  />
<br/>
<input type="submit" value="Gravar" />
<a href="index.php?controlador=pessoa&acao=lista">Voltar</a>
