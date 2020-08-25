<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Lista de Modelos de Contratos</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Lista de Modelos de Contratos</h4>
        </div>
    </div>
</div>

<?php if(isset($_GET['nome'])):?>
    <div class="alert alert-success">O contrato para a empresa <?php echo $_GET['nome'];?> já foi gerado e altomaticamente enviado para o email do cliente. <a href="<?php echo BASE_URL."adm/visualisarContrato/".$_GET['id'];?>">Clique aqui para visualisar</a></div>
<?php endif;?>

<table class="table table-dark table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email Empresa</th>
      <th scope="col">Titulo do Contrato</th>
      <th scope="col">Nome Fantasia</th>
      <th scope="col">CNPJ</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($listContratos as $item):?>
    <?php 
        $a = new Admin();
        $dadosEmpresa = $a->getDadosEmpresa($item['id_empresa']);    
    ?>
        <tr>
            <td><?php echo $item['id'];?></td>
            <td><?php echo $dadosEmpresa['email'];?></td>
            <td><?php echo $item['titulo'];?></td>
            <td><?php echo $dadosEmpresa['nome_fant'];?></td>
            <td><?php echo $dadosEmpresa['cnpj'];?></td>
            <td>
                <a href="<?php echo BASE_URL."adm/editarContratoModel/".$item['id'];?>" class="btn btn-info">Editar</a>
                <a href="<?php echo BASE_URL."adm/excluirContratoModel/".$item['id'];?>" class="btn btn-danger" onclick="return confirm('Deseja mesmo Excluir este Modelo de Contrato?');">Excluir</a>
            </td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>