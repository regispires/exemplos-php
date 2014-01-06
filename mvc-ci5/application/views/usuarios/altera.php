<h2>Cadastro de usuários</h2>
<form role="form" class="form-horizontal" action="<?= site_url('usuarios/altera_processa') ?>" method="POST" >
    <?php $this->load->view('usuarios/form'); ?>
</form>