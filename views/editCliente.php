<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Cliente</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Editar Cliente: <?php echo $clienteData['nome']." ".$clienteData['sobrenome'];?></h4>
        </div>
    </div>
</div>

<!-- <pre>
    <?php print_r($clienteData);?>
</pre> -->

<?php if(isset($msg_info) && $msg_info[0] == 'success'):?>
    <div class="alert alert-success"><?php echo $msg_info[1];?></div>
<?php elseif(isset($msg_info) && $msg_info[0] == 'error'):?>
    <div class="alert alert-danger"><?php echo $msg_info[1];?></div>
<?php endif;?>



<form method="POST">
    <h5 class="mg-b-10">Cliente da empresa</h5>
    <hr>

    <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Empresa</label>
        <select name="empresa" class="form-control">
        <?php foreach($empresasList as $item):?>
            <option value="<?php echo $item['id'];?>" <?php echo ($item['id'] == $clienteData['id_empresa'])?'selected':''?>><?php echo $item['nome_fant'];?></option>
        <?php endforeach;?>
        </select>
    </div>

    <h5 class="mg-b-10">Dados pessoais do Cliente</h5>
    <hr>
    <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Nome</label>
        <?php if(isset($clienteData['nome'])):?>
            <input type="text" class="form-control" placeholder="Enter your firstname" name="nome" value="<?php echo $clienteData['nome'];?>">
        <?php else:?>
            <input type="text" class="form-control" placeholder="Enter your firstname" name="nome" value="">
        <?php endif;?>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2" class="d-block">Sobrenome</label>

        <?php if(isset($clienteData['nome'])):?>
            <input type="text" class="form-control" placeholder="Enter your lastname" name="sobrenome" value="<?php echo $clienteData['sobrenome'];?>">
        <?php else:?>
            <input type="text" class="form-control" placeholder="Enter your lastname" name="sobrenome" value="">
        <?php endif;?>
    </div>


    <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Nascimento</label>
    <?php if(isset($clienteData['nascimento'])):?>
        <input type="date" class="form-control" name="nascimento" value="<?php echo date('Y-m-d', strtotime($clienteData['nascimento']));?>">
    <?php else:?>
        <input type="date" class="form-control" name="nascimento" >
    <?php endif;?>
  </div>

  <h5 class="mg-b-10">Informações de Contato</h5>
    <hr>
  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Telefone</label>
    <?php if(isset($clienteData['telefone'])):?>
        <input type="text" class="form-control" placeholder="Enter your lastname" name="telefone" value="<?php echo $clienteData['telefone'];?>">
    <?php else:?>
        <input type="text" class="form-control" placeholder="Enter your lastname" name="telefone" value="">
    <?php endif;?>
  </div>


  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Celular</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="celular" value="<?php echo (isset($clienteData['celular']))?$clienteData['celular']:''?>">
  </div>
    
  <h5 class="mg-b-10">Documentação</h5>
    <hr>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">CPF</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="cpf" value="<?php echo (isset($clienteData['cpf']))?$clienteData['cpf']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">RG</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="rg" value="<?php echo (isset($clienteData['rg']))?$clienteData['rg']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">SSP</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="ssp" value="<?php echo (isset($clienteData['ssp']))?$clienteData['ssp']:''?>">
  </div>

  <h5 class="mg-b-10">Dados Adicionais do Cliente</h5>
    <hr>
  
  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Profissão</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="profissao" value="<?php echo (isset($clienteData['profissao']))?$clienteData['profissao']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Nacionalidade</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="nacionalidade" value="<?php echo (isset($clienteData['nacionalidade']))?$clienteData['nacionalidade']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Estado Civil</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="estado_civil" value="<?php echo (isset($clienteData['estado_civil']))?$clienteData['estado_civil']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Curso</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="curso" value="<?php echo (isset($clienteData['curso']))?$clienteData['curso']:''?>">
  </div>

  <h5 class="mg-b-10">Endereço do Cliente</h5>
    <hr>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">CEP</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="cep" value="<?php echo (isset($clienteData['cep']))?$clienteData['cep']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Rua</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="rua" value="<?php echo (isset($clienteData['rua']))?$clienteData['rua']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Número</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="numero" value="<?php echo (isset($clienteData['numero']))?$clienteData['numero']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Bairro</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="bairro" value="<?php echo (isset($clienteData['bairro']))?$clienteData['bairro']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Complemento</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="complemento" value="<?php echo (isset($clienteData['complemento']))?$clienteData['complemento']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Edifício</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="edificio" value="<?php echo (isset($clienteData['edificio']))?$clienteData['edificio']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Cidade</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="cidade" value="<?php echo (isset($clienteData['cidade']))?$clienteData['cidade']:''?>">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">UF</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="uf" value="<?php echo (isset($clienteData['uf']))?$clienteData['uf']:''?>">
  </div>
  <h5 class="mg-b-10">Email</h5>
    <hr>
    <div class="form-group">
        <label for="formGroupExampleInput2" class="d-block">E-mail</label>
        <input type="text" class="form-control" placeholder="Enter your email" name="email" value="<?php echo (isset($clienteData['email']))?$clienteData['email']:''?>">
        
    </div>

    <h5 class="mg-b-10">Dados técnicos do Cliente</h5>
    <hr>

    <div class="form-group">
        <label for="formGroupExampleInput2" class="d-block">IP</label>

        <?php if(isset($clienteData['ip_cliente'])):?>
            <input type="text" class="form-control" placeholder="IP" name="ip_cliente" value="<?php echo $clienteData['ip_cliente'];?>" disabled>
        <?php else:?>
            <input type="text" class="form-control" placeholder="IP" name="ip_cliente" value="" disabled>
        <?php endif;?>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2" class="d-block">Cidade</label>

        <?php if(isset($clienteData['cidade'])):?>
            <input type="text" class="form-control" placeholder="Cidade" name="cidade" value="<?php echo $clienteData['cidade'];?>" disabled>
        <?php else:?>
            <input type="text" class="form-control" placeholder="Cidade" name="cidade" value="" disabled>
        <?php endif;?>
    </div>

    <!-- <div class="form-group">
        <label for="formGroupExampleInput2" class="d-block">Provedor</label>

        <?php if(isset($clienteData['provedor'])):?>
            <input type="text" class="form-control" placeholder="provedor" name="provedor" value="<?php echo $clienteData['provedor'];?>" disabled>
        <?php else:?>
            <input type="text" class="form-control" placeholder="provedor" name="provedor" value="" disabled>
        <?php endif;?>
    </div> -->

    <div class="form-group">
        <label for="formGroupExampleInput2" class="d-block">Navegador/Sistema Operacional</label>

        <?php if(isset($clienteData['navegador'])):?>
            <input type="text" class="form-control" placeholder="navegador" name="navegador" value="<?php echo $clienteData['navegador'];?>" disabled>
        <?php else:?>
            <input type="text" class="form-control" placeholder="navegador" name="navegador" value="" disabled>
        <?php endif;?>
    </div>

    <!-- <div class="form-group">
        <label for="formGroupExampleInput2" class="d-block">Sistema Operacional</label>

        <?php if(isset($clienteData['sistema_operac'])):?>
            <input type="text" class="form-control" placeholder="sistema operacional" name="sistema_operac" value="<?php echo $clienteData['sistema_operac'];?>" disabled>
        <?php else:?>
            <input type="text" class="form-control" placeholder="sistema operacional" name="sistema_operac" value="" disabled>
        <?php endif;?>
    </div>     -->

    <button class="btn btn-primary" type="submit">Editar</button>
    <button class="btn btn-secondary" type="cancel">Cancelar</button>
</form>

<h5 class="mg-b-10" style="margin-top: 30px;">Contratos do Cliente</h5>
<hr>

<table class="table table-dark table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo Contrato</th>
      <th scope="col">Nome Fantasia</th>
      <th scope="col">Status</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($contratosList as $key => $val):?>
    <?php 
        $a = new Admin();
        $dadosContrato = $a->getDadosContratoModel($val['id_contrato']);
        $dadosEmpresa = $a->getDadosEmpresa($val['id_empresa']);
    ?>
        <tr>
            <td><?php echo $item['id'];?></td>
            <td><?php echo $dadosContrato['titulo'];?></td>
            <td><?php echo $dadosEmpresa['nome_fant'];?></td>
            <td>
                <?php 
                    switch($val['status_assin']){
                        case 0:
                            echo "<div class='alert alert-warning'>Não Assinado</div>";
                        break;
                        case 2:
                            echo "<div class='alert alert-success'>Assinado</div>";
                        break;
                    }
                ?>
            </td>
            <td>
                <a href="<?php echo BASE_URL."adm/excluirContratoFromClient/".$val['id']."/".$clienteData['id'];?>" class="btn btn-danger">Excluir</a>
            </td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>

    