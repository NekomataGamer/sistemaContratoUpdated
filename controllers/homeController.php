<?php
class homeController extends Controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }
// Area do cliente
    public function index() {
        if(isset($_SESSION['login_adm']) && !empty($_SESSION['login_adm'])){
            $dados = array();

            $this->loadView('home', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }

    public function clienteContrato($id_contrato){
        $dados = array();

        $a = new Admin();
        $c = new Clientes();

        $dados['dadosContrato'] = $a->getDadosContrato($id_contrato);

        $this->loadView('assinarContrato', $dados);
    }

    public function visualisarContrato($id_contrato){
        $dados = array();
        $c = new Clientes();

        $dados['dadosContrato'] = $c->getDadosContrato($id_contrato);

        $this->loadView('contrato', $dados);
    }

    public function assinarContrato($id_contrato){
        $c = new Clientes();

        $dados['dadosContrato'] = $c->getDadosContrato($id_contrato);

        if($dados['dadosContrato']['status_assin'] != 2){
            if($c->assinarContrato($id_contrato)){
                header("Location: ".BASE_URL."home/clienteContrato/".$id_contrato."/?status=success");
            }
        }
    }

}