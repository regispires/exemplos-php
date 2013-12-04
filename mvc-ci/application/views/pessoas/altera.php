<h2>Cadastro de pessoas</h2>
<form action="<?= site_url('pessoas/altera_processa') ?>" method="POST" >
    <?php $this->load->view('pessoas/form'); ?>
</form>