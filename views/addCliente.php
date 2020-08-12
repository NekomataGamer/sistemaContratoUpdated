<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar Cliente</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Adicionar Cliente</h4>
        </div>
    </div>
</div>

<?php if(isset($msg_info) && $msg_info[0] == 'success'):?>
    <div class="alert alert-success"><?php echo $msg_info[1];?></div>
<?php elseif(isset($msg_info) && $msg_info[0] == 'error'):?>
    <div class="alert alert-danger"><?php echo $msg_info[1];?></div>
<?php endif;?>
<form method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="formGroupExampleInput" class="d-block">Empresa</label>
    <select name="empresa" class="form-control" id="empresa">
      <option value="">Selecione Uma empresa</option>
      <?php foreach($empresasList as $item):?>
        <option value="<?php echo $item['id'];?>"><?php echo $item['nome_fant'];?></option>
      <?php endforeach;?>
    </select>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput" class="d-block">Nome</label>
    <input type="text" class="form-control" placeholder="Enter your firstname" name="nome">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Sobrenome</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="sobrenome">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">E-mail</label>
    <input type="email" class="form-control" placeholder="Enter your lastname" name="email">
  </div>

  <div class="form-group" id="meu_pau">
    <label for="formGroupExampleInput2" class="d-block" id="">Tipo de Contrato</label>
    <select name="tipo_contrato" id="tipo_contrato" class="form-control">
      
    </select>
  </div>
  

  <button class="btn btn-primary" type="submit">Cadastrar</button>
  <button class="btn btn-secondary" type="cancel">Cancelar</button>
</form>

