<?php
class Clientes extends Model {
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
    public function assinarContrato($id_contrato){
        $sql = "SELECT * FROM contratos WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $id_contrato);
        $sql->execute();

        if($sql->rowCount() > 0){
            $dadosContrato = $sql->fetch();

            $sql = "UPDATE contratos SET status_assin = :status_assin, data_assinado = NOW() WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':status_assin', 2);
            $sql->bindValue(':id', $id_contrato);
            $sql->execute();

            $sql = "UPDATE clientes SET contrato_stat = :contrato_stat WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':contrato_stat', 2);
            $sql->bindValue(':id', $dadosContrato['id_cliente']);
            $sql->execute();

            $this->atualizarClienteRemoto($id_contrato);

            return true;

        }
    }

    public function atualizarClienteRemoto($id_contrato){
        $dadosContrato = $this->getDadosContrato($id_contrato);

        $ip_cliente = $_SERVER['REMOTE_ADDR'];
        $provedor_cliente = '';
        $navegador_cliente = $_SERVER['HTTP_USER_AGENT'];
        $sistema_operacional = '';

        $sql = "UPDATE clientes SET ip_cliente = :ip_cliente, provedor = :provedor, navegador = :navegador, sistema_operac = :sistema_operac WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id', $dadosContrato['id_cliente']);
        $sql->bindValue(':ip_cliente', $ip_cliente);
        $sql->bindValue(':provedor', $provedor_cliente);
        $sql->bindValue(':provedor', $provedor_cliente);
        $sql->bindValue(':navegador', $navegador_cliente);
        $sql->bindValue(':sistema_operac', $sistema_operacional);
        $sql->execute();

        return true;
    }
}