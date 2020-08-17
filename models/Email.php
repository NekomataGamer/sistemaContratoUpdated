<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Email extends Model {

    public function enviar($dadosEmpresa, $dadosCliente, $tipo_contrato, $idContrato){
        $a = new Admin();
        $c = new Controller();
        $dadosContrato = $a->getDadosContrato($idContrato);
// VIEW TEMPLATE DO EMAIL;
        ob_start();
            $dados = array();
            $dados['dadosContrato'] = $dadosContrato;
            $dados['dadosModeloContrato'] = $a->getDadosContratoModel($tipo_contrato);
            $dados['dadosCliente'] = $dadosCliente;
            $dados['dadosEmpresa'] = $dadosEmpresa;

            $c->loadView('templateEmail', $dados);
            $corpo = ob_get_contents();
        ob_end_clean();
// END VIEW TEMPLATE DO EMAIL;
        $nome = $dadosEmpresa['nome_fant'];
        $email = $dadosEmpresa['email'];
        $msg = 'esta é a msg do email';
        $para = $dadosCliente['email'];
        $assunto = $dadosCliente['nome']."! Assine seu contrato da".$dadosEmpresa['nome_fant']." agora!";
        

        $mail = new PHPMailer(true);

        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //debugação de codigo util para achar erros
                $mail->isSMTP();                                            
                $mail->Host       = 'mail.cosersalvador.com';                    
                $mail->SMTPAuth   = true;    
                $mail->SMTPSecure = 'ssl';                               
                $mail->Username   = 'alisonbucker@cosersalvador.com';                     
                $mail->Password   = 'dropthebass12';                                    
                $mail->Port       =  465;
                
                $mail->setFrom('originalalison@gmail.com', 'Contato Alison Bucker');  // de onde é enviado 
                $mail->addAddress($para); // para onde é enviado administrador do sistema
                $mail->isHTML(true);  // habilita  o uso do HTML
                $mail->CharSet = 'UTF-8';
                $mail->Subject = utf8_decode($assunto) ; //Assunto
                $mail->Body = $corpo;  // corpo da mensagem
                $mail->AltBody = $dados['dadosContrato'] = $dadosContrato." Copie e cole este link no seu navegador para acessar a pagina para assinatura do contrato.";  //para clientes sem suporte html
                if($mail->send()){
                    echo "Enviado";
                }else{
                    echo "Erro";
                }
            } catch (Exception  $e) {
                echo "ERRO: {$mail->ErrorInfo}";
            }
    }
}