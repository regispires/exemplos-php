<h2>Cadastro de pessoas</h2>
<form role="form" class="form-horizontal" action="<?= site_url('pessoas/altera_processa') ?>" method="POST" >
    <?php $this->load->view('pessoas/form'); ?>
</form>