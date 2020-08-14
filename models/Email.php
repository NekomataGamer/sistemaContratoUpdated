<?php
class Email extends Model {
    public function enviar($dadosEmpresa, $dadosCliente, $tipo_contrato, $idContrato){
        $para = $dadosCliente['email'];
        $assunto = $dadosEmpresa['nome_fant']." Contrato NOME DO CONTRATO";
        $corpo = "Olá, está aqui o contrato. <a href='google.com'>Clique aqui para visualisar</a>";

        $cabecalho = "From: ".$dadosEmpresa['email']."\r\n".
                      "Reply-To: ".$dadosEmpresa['email']."\r\n".
                      "X-Mailer: PHP/".phpversion();

        mail($para, $assunto, $corpo, $cabecalho);
        return true;
    }
}