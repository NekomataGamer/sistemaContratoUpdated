<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar Contrato</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Adicionar Contrato</h4>
        </div>
    </div>
</div>

<?php if(isset($_GET['name'])):?>
    <div class="alert alert-success">O cliente <?php echo $_GET['name'];?>, suas empresas e seus contratos foram excluidos com sucesso.</div>
<?php endif;?>

<?php if(isset($msg_info) && $msg_info[0] == 'success'):?>
    <div class="alert alert-success"><?php echo $msg_info[1];?></div>
<?php elseif(isset($msg_info) && $msg_info[0] == 'error'):?>
    <div class="alert alert-danger"><?php echo $msg_info[1];?></div>
<?php endif;?>
<form method="POST">
  <div class="form-group">
    <label for="formGroupExampleInput" class="d-block">Email do cliente</label>
    <input type="text" class="form-control" placeholder="Enter client email" name="email_cliente">
  </div>

  <button class="btn btn-primary" type="submit">Criar e Enviar Contrato</button>
  <button class="btn btn-secondary" type="cancel">Cancelar</button>
</form>