<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Empresa</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Editar Empresa: <?php echo $empresaData['nome_fant'];?></h4>
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
    <h5 class="mg-b-10">Dados da empresa</h5>
    <hr>
    <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Nome do Cliente</label>
        <?php if(isset($empresaData['id_cliente'])):?>
            <input type="text" class="form-control" placeholder="Enter your firstname" name="nome" value="<?php echo $empresaData['id_cliente'];?>" disabled>
        <?php else:?>
            <input type="text" class="form-control" placeholder="Enter your firstname" name="nome" value="">
        <?php endif;?>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2" class="d-block">Razão Social</label>

        <?php if(isset($empresaData['raz_soc'])):?>
            <input type="text" class="form-control" placeholder="Enter your email" name="raz_soc" value="<?php echo $empresaData['raz_soc'];?>">
        <?php else:?>
            <input type="text" class="form-control" placeholder="Enter your email" name="raz_soc" value="">
        <?php endif;?>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2" class="d-block">Nome Fantasia</label>

        <?php if(isset($empresaData['nome_fant'])):?>
            <input type="text" class="form-control" placeholder="Enter your email" name="nome_fant" value="<?php echo $empresaData['nome_fant'];?>">
        <?php else:?>
            <input type="text" class="form-control" placeholder="Enter your email" name="nome_fant" value="">
        <?php endif;?>
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2" class="d-block">cnpj</label>

        <?php if(isset($empresaData['cnpj'])):?>
            <input type="text" class="form-control" placeholder="Enter your email" name="cnpj" value="<?php echo $empresaData['cnpj'];?>">
        <?php else:?>
            <input type="text" class="form-control" placeholder="Enter your email" name="cnpj" value="">
        <?php endif;?>
    </div>

    

    <button class="btn btn-primary" type="submit">Editar</button>
    <button class="btn btn-secondary" type="cancel">Cancelar</button>
</form>