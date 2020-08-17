<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar Modelo de Contrato</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Adicionar Modelo de Contrato</h4>
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
        <select name="empresa" id="" class="form-control">
            <?php foreach($listEmpresas as $item):?>
                <option value="<?php echo $item['id'];?>"><?php echo $item['nome_fant'];?></option>
            <?php endforeach;?>
        </select>
    </div>
    
    <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Titulo</label>
        <input type="text" class="form-control" placeholder="Insira O titulo do contrato" name="title">
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Corpo do Contrato</label>
        <textarea name="corpo" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
  <button class="btn btn-primary" type="submit">Cadastrar</button>
  <button class="btn btn-secondary" type="cancel">Cancelar</button>
</form>

