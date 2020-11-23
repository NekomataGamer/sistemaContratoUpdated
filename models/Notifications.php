<?php
class Notifications extends Model{
    public function getNotifications($limit){
        $array = array();

        $a = new Admin();

        $sql = "SELECT * FROM notifications limit $limit";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();

            for($q=0;$q<count($array);$q++){
                $array[$q]['dadosCliente'] = $a->getClientData($array[$q]['id_cliente']);
                $array[$q]['dadosContrato'] = $a->getDadosContrato($array[$q]['id_contrato']);
                // $array[$q]['dadosEmpresa'] = $a->getDadosEmpresa($array[$q]['id_empresa']);
            }
        }

        return $array;
    }

    public function saveNotification($dadosContrato, $id_contrato){
        $dadosRemotos = $_SERVER['HTTP_USER_AGENT'];

        $sql = "INSERT INTO notifications SET id_cliente = :id_cliente, id_contrato = :id_contrato, data_assinado = NOW(), dados_remotos = :dados_remotos, status = 1";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':id_cliente', $dadosContrato['id_cliente']);
        $sql->bindValue(':id_contrato', $id_contrato);
        $sql->bindValue('dados_remotos', $dadosRemotos);
        $sql->execute();

        return true;
    }
}