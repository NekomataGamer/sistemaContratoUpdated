<?php
class Admin extends Model {

	public function login($email, $senha){
        $sql = "SELECT * FROM admin WHERE email = :email AND senha = :senha";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();

            $_SESSION['login_adm'] = $dados['id'];

            header("Location: ".BASE_URL."adm");
        }else{
            return false;
        }  
    }

    public function addClientes($nome, $sobrenome, $email, $tipo_contrato, $empresa){
        $sql = "SELECT * FROM clientes WHERE email = :email AND id_empresa = :id_empresa";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':id_empresa', $empresa);
        $sql->execute();

        if($sql->rowCount() > 0){
            return false;
        }else{
            $sql = "INSERT INTO clientes SET nome = :nome, sobrenome = :sobrenome, email = :email, id_empresa = :id_empresa";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':sobrenome', $sobrenome);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':id_empresa', $empresa);
            $sql->execute();

            $id = $this->db->lastInsertId();

            $this->addNewContratoToClient($empresa, $tipo_contrato, $id);
            // $this->gerarContrato($id, $empresa);

            return true;
        }
    }

    public function editClient($nome, $sobrenome, $email, $ip_cliente, $cidade, $provedor, $navegador, $sistema_operac, $id_cliente, $empresa){
        $sql = "UPDATE clientes SET nome = :nome, sobrenome = :sobrenome, email = :email, ip_cliente = :ip_cliente, cidade = :cidade, provedor = :provedor, navegador = :navegador, sistema_operac = :sistema_operac, id_empresa = :id_empresa WHERE id = :id_cliente";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':sobrenome', $sobrenome);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':ip_cliente', $ip_cliente);
        $sql->bindValue(':cidade', $cidade);
        $sql->bindValue(':provedor', $provedor);
        $sql->bindValue(':navegador', $navegador);
        $sql->bindValue(':sistema_operac', $sistema_operac);
        $sql->bindValue(':id_empresa', $empresa);
        $sql->bindValue(':id_cliente', $id_cliente);
        $sql->execute();

        return true;
    }

    public function excluirCliente($id_cliente){
        // Pegando o nome e sobrenome do cliente
        $sql = "SELECT nome, sobrenome FROM clientes WHERE id = :id_cliente";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_cliente', $id_cliente);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();

            // Excluindo o cliente
            $sql = "DELETE FROM clientes WHERE id = :id_cliente";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_cliente', $id_cliente);
            $sql->execute();

        }

        header("Location: ".BASE_URL."adm/listClients/?name=".$dados['nome']." ".$dados['sobrenome']."&status=success");
    }

    public function getClientData($id_client){
        $array = array();

        $sql = "SELECT * FROM clientes WHERE id = :id_client";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_client', $id_client);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getClientList(){
        $array = array();

        $sql = "SELECT * FROM clientes";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }else{
            $array = [];
        }

        return $array;
    }
    
    public function addEmpresa($email_empresa, $raz_soc, $nome_fant, $cnpj, $logo){
        $u = new Uploader();
        // Verifica se o email já está cadastrado;
        $sql = "SELECT id FROM empresas WHERE email = :email";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email_empresa);
        $sql->execute();

        if($sql->rowCount() > 0){
            
            return false;
        }else{
            // Se o email não estiver cadastrado, verifica se o cnpj já está cadastrado;
            $sql = "SELECT id FROM empresas WHERE cnpj = :cnpj";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':cnpj', $cnpj);
            $sql->execute();

            if($sql->rowCount() > 0){

                return false;
            }else{
                // caso todas condições estejam favoraveis, adiciona empresa;
                $sql = "INSERT INTO empresas SET email = :email, raz_soc = :raz_soc, nome_fant = :nome_fant, cnpj = :cnpj, contrato_stat = :contrato_stat";
                $sql = $this->db->prepare($sql);
                $sql->bindValue(':email', $email_empresa);
                $sql->bindValue(':raz_soc', $raz_soc);
                $sql->bindValue(':nome_fant', $nome_fant);
                $sql->bindValue(':cnpj', $cnpj);
                $sql->bindValue(':contrato_stat', 0);
                $sql->execute();

                $idLEmpresa = $this->db->lastInsertId();

                $u->upload($idLEmpresa, $logo);

                
                return true;
            }

        }
    }

    public function getDadosEmpresa($id_empresa){
        $array = array();

        $sql = "SELECT * FROM empresas WHERE id = :id_empresa";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_empresa', $id_empresa);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getListEmpresas(){
        $array = array();

        $sql = "SELECT * FROM empresas";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function editarEmpresa($raz_soc, $nome_fant, $cnpj, $id_empresa){
        $sql = "UPDATE empresas SET raz_soc = :raz_soc, nome_fant = :nome_fant, cnpj = :cnpj WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':raz_soc', $raz_soc);
        $sql->bindValue(':nome_fant', $nome_fant);
        $sql->bindValue(':cnpj', $cnpj);
        $sql->bindValue(':id', $id_empresa);
        $sql->execute();

        return true;
    }

    public function excluirEmpresa($id_empresa){
        // Pegando dado da Empresa;
        $sql = "SELECT raz_soc FROM empresas WHERE id = :id_empresa";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_empresa', $id_empresa);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();

            // Deletando a empresa
            $sql = "DELETE FROM empresas WHERE id = :id_empresa";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id_empresa', $id_empresa);
            $sql->execute();
        }

        header("Location: ".BASE_URL."adm/listEmpresas/?name=".$dados['raz_soc']."&status=success");
    }

    public function getListContratos(){
        $array = array();

        $sql = "SELECT * FROM contratos_models";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function gerarContrato($id_cliente, $id_empresa){
        // Pegando dados Necessários para inserir registro
        $dadosEmpresa = $this->getDadosEmpresa($id_empresa); //Dados da Empresa;
        $dadosCliente = $this->getClientData($id_cliente); //Dados do cliente;

        $sql = "INSERT INTO contratos SET id_cliente = :id_cliente, id_empresa = :id_empresa, data_criado = NOW(), data_expirado = :data_expirado, link = :link, link_adm = :link_adm";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_cliente', $id_cliente);
        $sql->bindValue(':id_empresa', $id_empresa);
        $sql->bindValue(':data_expirado', '2020-07-26 12:46:09');
        $sql->bindValue(':link', '');
        $sql->bindValue(':link_adm', '');
        $sql->execute();

        $idContrato = $this->db->lastInsertId();
        $linkAdm = BASE_URL."adm/visualisarContrato/".$idContrato;
        $link = BASE_URL."home/clienteContrato/".$idContrato;

        $sql = "UPDATE contratos SET link = :link, link_adm = :link_adm WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':link', $link);
        $sql->bindValue(':link_adm', $linkAdm);
        $sql->bindValue(':id', $idContrato);
        $sql->execute();

        $sql = "UPDATE clientes SET contrato_stat = :contrato_stat, id_contrato = :id_contrato WHERE id = :id_cliente";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':contrato_stat', 1);
        $sql->bindValue(':id_cliente', $id_cliente);
        $sql->bindValue(':id_contrato', $idContrato);
        $sql->execute();

        return $linkAdm;
    }

    public function getDadosContrato($id_contrato){
        $array = array();

        $sql = "SELECT * FROM contratos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_contrato);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getDadosContratoModel($id_contrato){
        $array = array();

        $sql = "SELECT * FROM contratos_models WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_contrato);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

    public function getTiposContratos($id_empresa){
        // print_r($id_empresa);exit;
        $array = array();
        $sql = "SELECT * FROM contratos_models WHERE id_empresa = :id_empresa";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_empresa', $id_empresa['id_empresa']);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }

    public function getContratosFromCliente($id_client){
        $array = array();

        $sql = "SELECT * FROM contratos WHERE id_cliente = :id_cliente";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_cliente', $id_client);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function addNewContrato($empresa, $titulo, $corpo, $logo){
        $hash_logo = md5(rand(0, 9999999997999).rand(0,8347256805496)).'.png';

        $sql = "INSERT INTO contratos_models SET id_empresa = :id_empresa, logo = :hash_logo, titulo = :titulo, contrato_txt = :contrato_txt";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':hash_logo', $hash_logo);
        $sql->bindValue(':id_empresa', $empresa);
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':contrato_txt', $corpo);
        $sql->execute();

        $id = $this->db->lastInsertId();



        return true;
    }

    public function addNewContratoToClient($empresa, $tipo_contrato, $id_client){
        $e = new Email();

        $dadosEmpresa = $this->getDadosEmpresa($empresa); //Dados da Empresa;
        $dadosCliente = $this->getClientData($id_client); //Dados do cliente;

        $sql = "INSERT INTO contratos SET id_cliente = :id_cliente, id_empresa = :id_empresa, id_contrato = :id_contrato";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_cliente', $id_client);
        $sql->bindValue(':id_empresa', $empresa);
        $sql->bindValue(':id_contrato', $tipo_contrato);
        $sql->execute();
        
        $idContrato = $this->db->lastInsertId();

        $linkAdm = BASE_URL."adm/visualisarContrato/".$idContrato;
        $link = BASE_URL."home/clienteContrato/".$idContrato;

        $sql = "UPDATE contratos SET link = :link, link_adm = :link_adm WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':link', $link);
        $sql->bindValue(':link_adm', $linkAdm);
        $sql->bindValue(':id', $idContrato);
        $sql->execute();
   
        $e->enviar($dadosEmpresa, $dadosCliente, $tipo_contrato, $idContrato);

        return $idContrato;
    }

    public function editarContratoModel($empresa, $titulo, $corpo, $logo, $id){
        $sql = "UPDATE contratos_models SET id_empresa = :id_empresa, titulo = :titulo, contrato_txt = :contrato_txt WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_empresa', $empresa);
        $sql->bindValue(':titulo', $titulo);
        $sql->bindValue(':contrato_txt', $corpo);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return true;
    }

    public function excluirContratoModel($id_contrato){
        $sql = "DELETE FROM contratos_models WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_contrato);
        $sql->execute();

        $sql = "DELETE FROM contratos WHERE id_contrato = :id_contrato";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_contrato', $id_contrato);
        $sql->execute();

        return true;
    }

    public function excluirContratoDoCliente($id_contrato){
        $sql = "DELETE FROM contratos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_contrato);
        $sql->execute();

        return true;
    }

    public function logout(){
        unset($_SESSION['login_adm']);
        header("Location: ".BASE_URL);
    }

    public function getDadosAdm($id){
        $array = array();

        $sql = "SELECT * FROM admin WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;
    }
}