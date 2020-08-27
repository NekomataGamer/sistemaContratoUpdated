<?php
class admController extends Controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $id = $_SESSION['login_adm'];

            $dados['admData'] = $a->getDadosAdm($id);

            $this->loadTemplate('dash', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function addClientes(){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $id = $_SESSION['login_adm'];

            $dados['admData'] = $a->getDadosAdm($id);
            $dados['empresasList'] = $a->getListEmpresas();
            

            if(isset($_POST['nome']) && !empty($_POST['nome'])){
                $nome = addslashes($_POST['nome']);
                $sobrenome = addslashes($_POST['sobrenome']);
                $email = addslashes($_POST['email']);
                $empresa = addslashes($_POST['empresa']);
                $nascimento = addslashes($_POST['nascimento']);
                $telefone = addslashes($_POST['telefone']);
                $celular = addslashes($_POST['celular']);
                $cpf = addslashes($_POST['cpf']);
                $rg = addslashes($_POST['rg']);
                $ssp = addslashes($_POST['ssp']);
                $profissao = addslashes($_POST['profissao']);
                $nacionalidade = addslashes($_POST['nacionalidade']);
                $estado_civil = addslashes($_POST['estado_civil']);
                $curso = addslashes($_POST['curso']);
                $cep = addslashes($_POST['cep']);
                $rua = addslashes($_POST['rua']);
                $numero = addslashes($_POST['numero']);
                $bairro = addslashes($_POST['bairro']);
                $complemento = addslashes($_POST['complemento']);
                $edificio = addslashes($_POST['edificio']);
                $cidade = addslashes($_POST['cidade']);
                $uf = addslashes($_POST['uf']);

                $tipo_contrato = addslashes($_POST['tipo_contrato']);
                $arquivo_contrato = $_FILES['arquivo_contrato'];

                if($a->addClientes($nome, $sobrenome, $email, $empresa, $nascimento, $telefone, $celular, $cpf, $rg, $ssp, $profissao, $nacionalidade, $estado_civil, $curso, $cep, $rua, $numero, $bairro, $complemento, $edificio, $cidade, $uf, $tipo_contrato, $arquivo_contrato)){
                    $dados['msg_info'] = array('success', 'Cliente Cadastrado Com Sucesso!');
                }else{
                    $dados['msg_info'] = array('error', 'O E-mail já Está Cadastrado nesta empresa :/');
                }
            }

            $this->loadTemplate('addCliente', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function editarCliente($id_client){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $id = $_SESSION['login_adm'];

            if(isset($_POST['nome']) && !empty($_POST['nome'])){
                $nome = addslashes($_POST['nome']);
                $sobrenome = addslashes($_POST['sobrenome']);
                $email = addslashes($_POST['email']);
                $empresa = addslashes($_POST['empresa']);
                $nascimento = addslashes($_POST['nascimento']);
                $telefone = addslashes($_POST['telefone']);
                $celular = addslashes($_POST['celular']);
                $cpf = addslashes($_POST['cpf']);
                $rg = addslashes($_POST['rg']);
                $ssp = addslashes($_POST['ssp']);
                $profissao = addslashes($_POST['profissao']);
                $nacionalidade = addslashes($_POST['nacionalidade']);
                $estado_civil = addslashes($_POST['estado_civil']);
                $curso = addslashes($_POST['curso']);
                $cep = addslashes($_POST['cep']);
                $rua = addslashes($_POST['rua']);
                $numero = addslashes($_POST['numero']);
                $bairro = addslashes($_POST['bairro']);
                $complemento = addslashes($_POST['complemento']);
                $edificio = addslashes($_POST['edificio']);
                $cidade = addslashes($_POST['cidade']);
                $uf = addslashes($_POST['uf']);
                


                if($a->editClient($nome, $sobrenome, $email, $cidade, $id_client, $empresa, $nascimento, $telefone, $celular, $cpf, $rg, $ssp, $profissao, $nacionalidade, $estado_civil, $curso, $cep, $rua, $numero, $bairro, $complemento, $edificio, $uf)){
                    $dados['msg_info'] = array('success', 'Cliente Editado Com Sucesso!');
                }else{
                    $dados['msg_info'] = array('error', 'O Sistema não conseguiu editar o cliente, verifique novamente os valores preenchidos.');
                }
            }

            $dados['admData'] = $a->getDadosAdm($id);
            $dados['clienteData'] = $a->getClientData($id_client);
            $dados['empresasList'] = $a->getListEmpresas();
            $dados['contratosList'] = $a->getContratosFromCliente($id_client);

            $this->loadTemplate('editCliente', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function excluirCliente($id_client){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $id = $_SESSION['login_adm'];

            $a->excluirCliente($id_client);
            
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function listClients(){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $id = $_SESSION['login_adm'];

            $dados['admData'] = $a->getDadosAdm($id);
            $dados['clientList'] = $a->getClientList();

            $this->loadTemplate('listClient', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function addEmpresa(){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $id = $_SESSION['login_adm'];

            $dados['admData'] = $a->getDadosAdm($id);
            
            if(isset($_POST['email_empresa']) && !empty($_POST['email_empresa'])){
               $email_empresa = addslashes($_POST['email_empresa']);
               $raz_soc = addslashes($_POST['raz_soc']);
               $nome_fant = addslashes($_POST['nome_fant']);
               $cnpj = addslashes($_POST['cnpj']);

               $logo = (!empty($_FILES['logo']))?$_FILES['logo']:array();

               if($a->addEmpresa($email_empresa, $raz_soc, $nome_fant, $cnpj, $logo)){
                    $dados['msg_info'] = array('success', 'Empresa Cadastrada Com Sucesso!');
               }else{
                    $dados['msg_info'] = array('error', 'O E-mail ou CNPJ já está cadastrado :/');
               }
            }

            $this->loadTemplate('addEmpresa', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function editarEmpresa($id_empresa){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $id = $_SESSION['login_adm'];

            if(isset($_POST['raz_soc']) && !empty($_POST['raz_soc'])){
                $raz_soc = addslashes($_POST['raz_soc']);
                $nome_fant = addslashes($_POST['nome_fant']);
                $cnpj = addslashes($_POST['cnpj']);
                $email = addslashes($_POST['email']);

                if($a->editarEmpresa($raz_soc, $nome_fant, $cnpj, $email, $id_empresa)){
                    $dados['msg_info'] = array('success', 'Empresa Editada Com Sucesso!');
                }else{
                     $dados['msg_info'] = array('error', 'Ocorreu um erro que empediu a edição dos dados da empresa :/');
                }
            }

            $dados['admData'] = $a->getDadosAdm($id);
            $dados['empresaData'] = $a->getDadosEmpresa($id_empresa);


            $this->loadTemplate('editEmpresa', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function excluirEmpresa($id_empresa){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $a->excluirEmpresa($id_empresa);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function listEmpresas(){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $id = $_SESSION['login_adm'];

            $dados['admData'] = $a->getDadosAdm($id);
            $dados['empresasList'] = $a->getListEmpresas();

            

            $this->loadTemplate('listEmpresas', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function gerarContrato($id_cliente, $id_empresa){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();
            $e = new SendEmail();

            $id = $_SESSION['login_adm'];

            $dados['admData'] = $a->getDadosAdm($id);
            $dadosEmpresa = $a->getDadosEmpresa($id_empresa);
            $dadosCliente = $a->getClientData($id_cliente);

            $linkAdm = $a->gerarContrato($id_cliente, $id_empresa);

            // Enviar email

            $e->enviar();


            if(!empty($linkAdm)){
                header("Location: ".BASE_URL."adm/listClients?nome=".$dadosCliente['nome']." ".$dadosCliente['sobrenome']."&empresa=".$dadosEmpresa['nome_fant'].".&status=succeshhhs&link=".$linkAdm);
            }else{
                // header("Location: ".BASE_URL."adm/listEmpresas?nome=".$dadosEmpresa['nome_fant']."&status=error");
                header("Location: ".BASE_URL."adm/listClients?nome=".$dadosEmpresa['nome_fant']."&status=sucgfhjdgcess&id=".$linkAdm);
            }

            // $this->loadTemplate('addContrato', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    

    public function visualisarContrato($id_contrato){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $id = $_SESSION['login_adm'];

            $dadosContrato = $a->getDadosContrato($id_contrato);
            
            $dados['admData'] = $a->getDadosAdm($id);
            $dados['dadosEmpresa'] = $a->getDadosEmpresa($dadosContrato['id_empresa']);
            $dados['dadosCliente'] = $a->getClientData($dadosContrato['id_cliente']);
            $dados['dadosContrato'] = $dadosContrato;
            $dados['dadosModelContrato'] = $a->getDadosContratoModel($dadosContrato['id_contrato']);
            // 

            $this->loadView('contrato', $dados);
            // ob_start();

            // 
            // $html = ob_get_contents();

            // ob_end_clean();
            // // 
            // ob_start();

            // $this->loadView('contratoCabec', $dados);
            // $cabec = ob_get_contents();

            // ob_end_clean();
            // // 
            // ob_start();

            // $this->loadView('contratoRodap', $dados);
            // $rodap = ob_get_contents();

            // ob_end_clean();
            

            // $mpdf = new \Mpdf\Mpdf([
            //     'mode' => 'utf-8',
            //     'format' => [190, 236],
            //     'orientation' => 'P',
            //     'setAutoTopMargin' => 'stretch'
            // ]);
            // $stylesheet = file_get_contents(BASE_URL.'assets/css/contractModel.css');
            
           
            // $mpdf->SetHTMLHeader($cabec);
            // $mpdf->SetFooter($rodap);
            
            // $mpdf->WriteHTML($stylesheet, 1); // CSS Script goes here.
            // $mpdf->WriteHTML($html);

            // $mpdf->Output('Contrato Absolute Christian', 'I');
            // exit;

            // DOCUMENTAÇÃO    https://mpdf.github.io
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function buscaTiposContratos(){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            $id = $_SESSION['login_adm'];

            $types = $a->getTiposContratos($_POST);

            echo json_encode($types);

        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function addNewContrato(){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            if(isset($_POST['title']) && !empty($_POST['title'])){
                $empresa = addslashes($_POST['empresa']);
                $titulo = addslashes($_POST['title']);
                $corpo = $_POST['corpo'];

                if($a->addNewContrato($empresa, $titulo, $corpo, array())){
                    $dados['msg'] = "Contrato Adicionado";
                }
            }

            $id = $_SESSION['login_adm'];
            $dados['admData'] = $a->getDadosAdm($id);
            $dados['listEmpresas'] = $a->getListEmpresas();

            $this->loadTemplate('addModeloContrato', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function addNewContratoToClient($id_client){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            if(isset($_POST['empresa']) && !empty($_POST['empresa'])){
                $empresa = addslashes($_POST['empresa']);
                $tipo_contrato = addslashes($_POST['tipo_contrato']);

               

                $contrato = $a->addNewContratoToClient($empresa, $tipo_contrato, $id_client);

                if($contrato){
                    $dados['msg_info'] = array('success', 'Contrato adicionado e enviado!');
                }else{
                    $dados['msg_info'] = array('error', 'Ocorreu um erro inesperado');
                }
            }

            $id = $_SESSION['login_adm'];
            $dados['admData'] = $a->getDadosAdm($id);
            $dados['empresasList'] = $a->getListEmpresas();
            $dados['dadosCliente'] = $a->getClientData($id_client);
            

            $this->loadTemplate('addContratoToClient', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function listContratos(){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            

            $id = $_SESSION['login_adm'];
            $dados['admData'] = $a->getDadosAdm($id);
            $dados['listContratos'] = $a->getListContratos();

            $this->loadTemplate('listModelsContracts', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function editarContratoModel($id_contrato){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();
            $a = new Admin();

            if(isset($_POST['title']) && !empty($_POST['title'])){
                $empresa = addslashes($_POST['empresa']);
                $titulo = addslashes($_POST['title']);
                $corpo = $_POST['corpo'];
                $logo = $_FILES['logo'];

                if($a->editarContratoModel($empresa, $titulo, $corpo, $logo, $id_contrato)){
                    $dados['msg_info'] = array(
                        "success",
                        "Modelo de contrato editado"
                    );
                }
            }
            
            $id = $_SESSION['login_adm'];
            $dados['admData'] = $a->getDadosAdm($id);
            $dados['dadosContrato'] = $a->getDadosContratoModel($id_contrato);
            $dados['listEmpresas'] = $a->getlistEmpresas();

            $this->loadTemplate('editModelsContracts', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function excluirContratoModel($id_contrato){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $a = new Admin();

            $a->excluirContratoModel($id_contrato);
            header("Location: ".BASE_URL."adm/listContratos");
        }else{
            header("Location: ". BASE_URL."adm/login");
        }
    }

    public function excluirContratoFromClient($id_contrato, $id_cliente){
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $a = new Admin();

            $a->excluirContratoDoCliente($id_contrato);
            header("Location: ".BASE_URL."adm/editarCliente/".$id_cliente);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function login(){
        $dados = array();

        if(isset($_POST['email']) && !empty($_POST['senha'])){
            $a = new Admin();

            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];

            $a->login($email, $senha);
        }

        $this->loadViewInTemplate('login', $dados);
    }

    public function logout(){
        $a = new Admin();

        $a->logout();
    }


    public function teste(){
        $dados = array();

        $this->loadView('templateEmail', $dados);
    }
}