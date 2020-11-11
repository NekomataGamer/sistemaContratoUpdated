<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar Contrato Para Cliente</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Adicionar Contrato Para Cliente <?php echo $dadosCliente['nome']." ".$dadosCliente['sobrenome'];?></h4>
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

  
  <div class="form-group" id="meu_pau">
    <label for="formGroupExampleInput2" class="d-block" id="">Tipo de Contrato</label>
    <select name="tipo_contrato" id="tipo_contrato" class="form-control">
    </select>
  </div>

  <div class="form-group">
      <label for="formGroupExampleInput" class="d-block">Arquivo de Contrato</label>
      <input type="file" class="form-control" name="arquivo_contrato">
  </div>
  
  <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Retorno</label>
        <select name="retorno_contrato" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>

  <button class="btn btn-primary" type="submit">Adicionar e Enviar</button>
  <button class="btn btn-secondary" type="cancel">Cancelar</button>
</form>

