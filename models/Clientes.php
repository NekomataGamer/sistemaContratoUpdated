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

            $sql = "UPDATE contratos SET status_assin = :status_assin WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':status_assin', 2);
            $sql->bindValue(':id', $id_contrato);
            $sql->execute();

            $sql = "UPDATE clientes SET contrato_stat = :contrato_stat WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':contrato_stat', 2);
            $sql->bindValue(':id', $dadosContrato['id_cliente']);
            $sql->execute();

            return true;

        }
    }
}