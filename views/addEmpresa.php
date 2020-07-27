<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar Empresa</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Adicionar Empresa</h4>
        </div>
    </div>
</div>

<?php if(isset($msg_info) && $msg_info[0] == 'success'):?>
    <div class="alert alert-success"><?php echo $msg_info[1];?></div>
<?php elseif(isset($msg_info) && $msg_info[0] == 'error'):?>
    <div class="alert alert-danger"><?php echo $msg_info[1];?></div>
<?php endif;?>

<form method="POST">
<div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">E-mail da Empresa</label>
    <input type="email" class="form-control" placeholder="Enter Email" name="email_empresa">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput" class="d-block">Razão Social</label>
    <input type="text" class="form-control" placeholder="Enter your firstname" name="raz_soc">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Nome Fantasia</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="nome_fant">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">CNPJ</label>
    <input id="inputBlocks" type="text" class="form-control" placeholder="0000 000 000 0000" name="cnpj">
  </div>

  <button class="btn btn-primary" type="submit">Cadastrar</button>
  <button class="btn btn-secondary" type="cancel">Cancelar</button>
</form>