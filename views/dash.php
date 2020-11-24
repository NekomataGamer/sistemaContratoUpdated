<div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
    <div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Sales Monitoring</li> -->
        </ol>
        </nav>
        <h4 class="mg-b-0 tx-spacing--1">Bem vindo (a) ao Dashboard, <?php echo $admData['nome'];?>!</h4>
    </div>
    
    <!-- <div class="d-none d-md-block">
        <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="mail" class="wd-10 mg-r-5"></i> Email</button>
        <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="printer" class="wd-10 mg-r-5"></i> Print</button>
        <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="file" class="wd-10 mg-r-5"></i> Generate Report</button>
    </div> -->
</div>

<div class="row">

<div class="col-lg-8 col-xl-8 mg-t-8">
    <div class="card mg-b-10">
    <div class="card-header pd-t-20 d-sm-flex align-items-start justify-content-between bd-b-0 pd-b-0">
        <div>
        <h6 class="mg-b-5">Contratos Assinados Recentemente</h6>
        <p class="tx-13 tx-color-03 mg-b-0">Lista de contratos adicionados recentemente</p>
        </div>
        <!-- <div class="d-flex mg-t-20 mg-sm-t-0">
        <div class="btn-group flex-fill">
            <button class="btn btn-white btn-xs active">Range</button>
            <button class="btn btn-white btn-xs">Period</button>
        </div>
        </div> -->
    </div><!-- card-header -->
    <div class="card-body pd-y-30">
        <div class="d-sm-flex">
        <div class="media">
            <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-teal tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-6">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
            </div>
            <div class="media-body">
            <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold tx-nowrap mg-b-5 mg-md-b-8">Contratos Assinados</h6>
            <h4 class="tx-20 tx-sm-18 tx-md-20 tx-normal tx-rubik mg-b-0"><?php echo $assinados['c'];?></h4>
            </div>
        </div>
        <div class="media mg-t-20 mg-sm-t-0 mg-sm-l-15 mg-md-l-40">
            <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-pink tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
            </div>
            <div class="media-body">
            <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold mg-b-5 mg-md-b-8">Aguardando Assinatura</h6>
            <h4 class="tx-20 tx-sm-18 tx-md-20 tx-normal tx-rubik mg-b-0"><?php echo $wait['c'];?></h4>
            </div>
        </div>
        <div class="media mg-t-20 mg-sm-t-0 mg-sm-l-15 mg-md-l-40">
            <div class="wd-40 wd-md-50 ht-40 ht-md-50 bg-primary tx-white mg-r-10 mg-md-r-10 d-flex align-items-center justify-content-center rounded op-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
            </div>
            <div class="media-body">
            <h6 class="tx-sans tx-uppercase tx-10 tx-spacing-1 tx-color-03 tx-semibold mg-b-5 mg-md-b-8">Todos os contratos</h6>
            <h4 class="tx-20 tx-sm-18 tx-md-20 tx-normal tx-rubik mg-b-0"><?php echo $todosContratos['c'];?></h4>
            </div>
        </div>
        </div>
    </div><!-- card-body -->
    <div class="table-responsive">
        <table class="table table-dashboard mg-b-0">
        <!-- <thead>
            <tr>
            <th> </th>
            <th class="text-right">Data</th>
            <th class="text-right">Status</th>
             <th class="text-right">Tax Withheld</th>
            <th class="text-right">Net Earnings</th> 
            </tr>
        </thead> -->
        <tbody>
            <?php foreach($notifications as $item):?>
                <tr>
                    <td class="tx-color-03 tx-normal"><?php echo "{$item['dadosCliente']['nome']} {$item['dadosCliente']['sobrenome']} assinou os documentos!"?></td>
                    <td class="tx-medium text-right"><div class="wd-12 ht-12 rounded-circle bd bd-3 bd-success"></div></td>
                    <td class="text-right tx-teal"><?php echo date('d/m/Y - H:i:s', strtotime($item['data_assinado']));?></td>
                    <td>
                        <a href="<?php echo BASE_URL;?>adm/editarCliente/<?php echo $item['id_cliente'];?>/#listContratosCliente"title="Visualisar"><i class="fa fa-eye fa-1x"></i></a>
                    </td>
                </tr>
            <?php endforeach;?>
            

            
        </tbody>
        </table>
    </div><!-- table-responsive -->
    </div><!-- card -->

    <div class="card card-body ht-lg-100">
    <div class="media">
        <span class="tx-color-04"><i class="fa fa-eye fa-4x" style="color:blue;"></i></span>
        <div class="media-body mg-l-20">
        <h6 class="mg-b-10">Clique no icone de olho azul na lista acima para visualisar os contratos do cliente.</h6>
        <p class="tx-color-03 mg-b-0">Você poderá visualisar todos os contratos. Assinados ou não.</p>
        </div>
    </div><!-- media -->
    </div>
</div>


<div class="col-md-4 col-xl-4 mg-t-4">
    <div class="card ht-100p">
    <div class="card-header d-flex align-items-center justify-content-between">
        <h6 class="mg-b-0">Novos Clientes</h6>
        <div class="d-flex align-items-center tx-18">
        <!-- <a href="" class="link-03 lh-0"><i class="icon ion-md-refresh"></i></a>
        <a href="" class="link-03 lh-0 mg-l-10"><i class="icon ion-md-more"></i></a> -->
        </div>
    </div>
    <ul class="list-group list-group-flush tx-13">
        
        <?php foreach($newClients as $item):?>
            <li class="list-group-item d-flex pd-sm-x-20">
                <div class="avatar"><span class="avatar-initial rounded-circle bg-gray-600"><?php echo substr($item['nome'], 0, 1)?></span></div>
                <div class="pd-l-10">
                    <p class="tx-medium mg-b-0"><?php echo mb_strimwidth("{$item['nome']} {$item['sobrenome']}", 0, 25, '...');?></p>
                    <small class="tx-12 tx-color-03 mg-b-0">Id do cliente <?php echo "# {$item['id']}";?></small>
                </div>
                <div class="mg-l-auto d-flex align-self-center">
                    <nav class="nav nav-icon-only">
                   
                    <a href="<?php echo BASE_URL;?>adm/addNewContratoToClient/<?php echo $item['id'];?>" title="Novo Contrato" class="nav-link d-none d-sm-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></a>

                    <a href="<?php echo BASE_URL;?>adm/excluirCliente/<?php echo $item['id'];?>" onclick="return confirm('Deseja mesmo Excluir este cliente?');" title="Excluir Cliente" class="nav-link d-none d-sm-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-slash"><circle cx="12" cy="12" r="10"></circle><line x1="4.93" y1="4.93" x2="19.07" y2="19.07"></line></svg></a>

                    <a href="<?php echo BASE_URL;?>adm/editarCliente/<?php echo $item['id'];?>" class="nav-link d-none d-sm-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>

                    <a href="" class="nav-link d-sm-none"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg></a>
                    </nav>
                </div>
            </li>
        <?php endforeach;?>
        
    </ul>
    <div class="card-footer text-center tx-13">
        <a href="<?php echo BASE_URL.'adm/listClients';?>" class="link-03">Ver mais clientes <i class="icon ion-md-arrow-down mg-l-5"></i></a>
    </div><!-- card-footer -->
    </div><!-- card -->
</div>

</div>


