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
    <div class="alert alert-success">O cliente <?php echo $_GET['name'];?>, suas empresas e seus contratos foram excluidos com sucesso.</div>
<?php endif;?>

<table class="table table-dark table-striped table-hover">
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
        <tr>
            <th scope="row"><?php echo $item['id'];?></th>
            <td><?php echo $item['nome']." ".$item['sobrenome'];?></td>
            <td><?php echo $item['id_empresa'];?>(colocar nome da empresa)</td>
            <td><?php echo $item['email'];?></td>
            <td>
                <?php if($item['contrato_stat'] == 0):?>
                    <a href="<?php echo BASE_URL."adm/gerarContrato/".$item['id']."/".$item['id_empresa'];?>" class="btn btn-warning">Gerar Contrato</a>
                <?php elseif($item['contrato_stat'] == 1 || $item['contrato_stat'] == 2):?>
                    <a href="<?php echo BASE_URL."adm/visualisarContrato/".$item['id_contrato'];?>" class="btn btn-success" target="_blank">Visualisar Contrato 
                        <?php if($item['contrato_stat'] == 2):?>
                            <strong>Assinado</strong>
                        <?php endif;?>
                    </a>
                    
                <?php endif;?>
                <a href="<?php echo BASE_URL."adm/editarCliente/".$item['id'];?>" class="btn btn-info">Editar</a>
                <a href="<?php echo BASE_URL."adm/excluirCliente/".$item['id'];?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>