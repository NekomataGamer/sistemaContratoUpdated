<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lista de Clientes</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Lista de Clientes</h4>
        </div>
    </div>
</div>

<?php if(isset($_GET['nome'])):?>
    <div class="alert alert-success">O contrato do  cliente <?php echo $_GET['nome'];?> com a empresa <?php echo $_GET['empresa'];?> já foi gerado e altomaticamente enviado para o email do cliente. <a href="<?php echo $_GET['link'];?>" target="_blank">Clique aqui para visualisar</a></div>
<?php endif;?>

<?php if(isset($_GET['name'])):?>
    <div class="alert alert-success">O cliente <?php echo $_GET['name'];?> foi excluido.</div>
<?php endif;?>

<table class="table table-dark table-striped table-hover display" id="listClients">
   <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Empresa</th>
      <th scope="col">E-mail</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
 <tbody>
    <?php foreach($clientList as $item):?>
        <?php 
            $a = new Admin();
            $dadosEmpresa = $a->getDadosEmpresa($item['id_empresa']);  
        ?>
        <tr>
            <th scope="row"><?php echo $item['id'];?></th>
            <td><?php echo $item['nome']." ".$item['sobrenome'];?></td>
            <td><?php echo $dadosEmpresa['nome_fant'];?></td>
            <td><?php echo $item['email'];?></td>
            <td>
                <a href="<?php echo BASE_URL."adm/addNewContratoToClient/".$item['id'];?>" class="btn btn-success">Novo Contrato</a>
                <a href="<?php echo BASE_URL."adm/editarCliente/".$item['id'];?>" class="btn btn-info">Editar</a>
                <a href="<?php echo BASE_URL."adm/excluirCliente/".$item['id'];?>" class="btn btn-danger" onclick="return confirm('Deseja mesmo Excluir este cliente?');">Excluir</a>
            </td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
    
    $('#listClients').DataTable();
</script>