<?php if(isset($_GET['status']) && $_GET['status'] == "success"):?>
    <div class="alert alert-success">Contrato Assinado Com Sucesso</div>
<?php endif;?>
<?php if($dadosContrato['status_assin'] == 2):?>
    <div class="alert alert-success">O contrato já foi assinado</div>
<?php endif;?>
<a href="<?php echo BASE_URL."home/visualisarContrato/".$dadosContrato['id'];?>">Visualisar Contrato</a><br>
<?php if($dadosContrato['status_assin'] != 2):?>
    <a href="<?php echo BASE_URL."home/assinarContrato/".$dadosContrato['id'];?>">Assinar Contrato</a>
<?php endif;?>

FALTA INSTALAR LAYOUT