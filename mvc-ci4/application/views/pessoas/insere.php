<h2>Cadastro de pessoas</h2>
<form action="<?= site_url('pessoas/insere_processa') ?>" method="POST" >
    <?php $this->load->view('pessoas/form'); ?>
</form>
