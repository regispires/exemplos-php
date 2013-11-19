<input type="hidden" name="id" value="<?= isset($resultado) ? $resultado['id'] : '' ?>" />
<label for="nome">Nome:</label>
<input id="nome" type="text" name="nome" value="<?= isset($resultado) ? $resultado['nome'] : '' ?>" /><br/>
<label for="fone">Telefone:</label>
<input id="fone" type="text" name="fone" value="<?= isset($resultado) ? $resultado['fone'] : '' ?>" /><br/>
<label for="email">E-Mail:</label>
<input id="email" type="text" name="email" value="<?= isset($resultado) ? $resultado['email'] : '' ?>" /><br/>