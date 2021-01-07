<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lista de Empresas</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Lista de Empresas</h4>
        </div>
    </div>
</div>

<?php if(isset($_GET['nome'])):?>
    <div class="alert alert-success">O contrato para a empresa <?php echo $_GET['nome'];?> já foi gerado e altomaticamente enviado para o email do cliente. <a href="<?php echo BASE_URL."adm/visualisarContrato/".$_GET['id'];?>">Clique aqui para visualisar</a></div>
<?php endif;?>

<table class="table table-dark table-striped table-hover display" id="listEmpresas">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email Empresa</th>
      <th scope="col">Razão Social</th>
      <th scope="col">Nome Fantasia</th>
      <th scope="col">CNPJ</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($empresasList as $item):?>
        <tr>
            <th scope="row"><?php echo $item['id'];?></th>
            <td><?php echo $item['email'];?></td>
            <td><?php echo $item['raz_soc'];?></td>
            <td><?php echo $item['nome_fant'];?></td>
            <td><?php echo $item['cnpj'];?></td>
            <td>
              <!-- <?php if($item['contrato_stat'] == 0):?>
                <a href="<?php echo BASE_URL."adm/gerarContrato/".$item['id'];?>" class="btn btn-warning">Gerar Contrato</a>
              <?php elseif($item['contrato_stat'] == 1 || $item['contrato_stat'] == 2):?>
                <a href="<?php echo BASE_URL."adm/visualisarContrato/".$item['id'];?>" class="btn btn-success">Visualisar Contrato</a>
              <?php endif;?> -->
              
              <a href="<?php echo BASE_URL."adm/editarEmpresa/".$item['id'];?>" class="btn btn-info">Editar</a>
              <a href="<?php echo BASE_URL."adm/excluirEmpresa/".$item['id'];?>" class="btn btn-danger" onclick="return confirm('Deseja mesmo Excluir esta empresa?');">Excluir</a>
            </td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>

<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    
    $('#listEmpresas').DataTable();
</script>