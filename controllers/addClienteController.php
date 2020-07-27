<?php
class admController extends controller {

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

            $this->loadTemplate('addCliente', $dados);
        }else{
            header("Location: ".BASE_URL."adm/login");
        }
    }