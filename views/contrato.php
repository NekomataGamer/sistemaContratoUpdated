<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Open+Sans&display=swap" rel="stylesheet">
		<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  
  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" crossorigin="anonymous"></script>
<style>
    .pagina_contrato{
		/* background-image:url('<?php echo BASE_URL.'contrato/logos/d45429edcf040a11b678d7749cf8ce43.png'; ?>'); */
		background-size: cover;
		background-position: center;
        width: 1380px;
        height: 1950px;
		font-family: "Courier New", Courier;
		text-align: justfy;
    }
</style>
<div class="conteudo-page">
    <!-- <?php if ($contrato[0]['assinado'] == 0 && !isset($visualizando)){ ?>
	<br/><br/>
    <a href="javascript:assinar_contrato()"><button type="button" class="btn btn-danger" style="width:1380px;"><i class="fa fa-pencil"></i> Assinar Contrato</button></a>
    <br/><br/>
    <?php } ?> -->
	<div class="pagina_contrato">
	    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	    <center>
	        <b style="font-size:44px;"><?php echo $dadosModelContrato['titulo'];?></b>
	        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	        
	        <b style="font-size:28px;"><?php echo $dadosModelContrato['desc'];?></b>
	    </center>
	</div>
	<br/>
	<hr>
	<br/>
	<div class="pagina_contrato" style="padding-top:150px;padding-left:150px;padding-right:150px;">
	    <div class="row">
    	    <div class="col-lg-7"></div>
    	    <div class="col-lg-5" style="font-size:24px;    line-height: 30px;">
    	        <b>CONTRATO DE PRESTAÇÃO DE SERVIÇOS DE ASSESSORIA PARA RECONHECIMENTO DE DIPLOMA DE MESTRADO E/OU DOUTORADO PROVENIENTE DE INSTITUIÇÃO DE ENSINO ESTRANGEIRA EM UNIVERSIDADE BRASILEIRA.</b>
    	    </div>
    	    <div class="col-lg-12" style="font-size:26px;text-align: justify;width:100%;    line-height: 30px;">
    	        <br/><br/>
    	        <b>CONTRATADO - X EDUCACIONAL – LEGALIZAÇÕES DE DOCUMENTOS, AS Assessoria e Consultoria em Educação,</b> empresa de direito privado, inscrita no <b>CNPJ/MF nº 31.281.703/0001-69,</b> com sede a Av. Jerônimo Monteiro, nº 1.000 – sala 502 – Edifício Trade Center – Centro – Vitória – ES – CEP nº 29.010-004, neste ato representado por seu <b>Responsável Técnico pela Operação, Sr. Alexandre Salvador,</b> brasileiro, casado, <b>ID Nº 673.508-32.</b>
    	        <br/><br/>
    	        <b>CONTRATANTE</b>
    	        
				<table>
					<thead>
					<tr>
						<td scope="col" colspan="12">Nome: <?php echo $dadosCliente['nome']." ".$dadosCliente['sobrenome'];?></td>
					</tr>
					<tr>
						<td scope="col" colspan="10">ENDEREÇO: <?php echo 'Rua '.$dadosCliente['rua'];?></td>
						<td scope="col" colspan="2">Nº: <?php echo $dadosCliente['numero']; ?></td>
					</tr>
					<tr>
						<td scope="col" colspan="2">COMPLEMENTO: <?php echo $dadosCliente['complemento']; ?></td>
						<td scope="col" colspan="6">EDIFÍCIO: <?php echo $dadosCliente['edificio']; ?></td>
						<td scope="col" colspan="4">BAIRRO: <?php echo $dadosCliente['bairro']; ?></td>
					</tr>
					<tr>
						<td scope="col" colspan="9">CIDADE: <?php echo $dadosCliente['cidade']; ?></td>
						<td scope="col" colspan="1">UF: <?php echo $dadosCliente['uf']; ?></td>
						<td scope="col" colspan="2">CEP: <?php echo $dadosCliente['cep']; ?></td>
					</tr>
					<tr>
						<td scope="col" colspan="4">TEL. FIXO: <?php echo $dadosCliente['telefone']; ?></td>
						<td scope="col" colspan="4">CELULAR: <?php echo $dadosCliente['celular']; ?></td>
						<td scope="col" colspan="4">WHATSAPP: <?php echo $dadosCliente['celular']; ?></td>
					</tr>
					<tr>
						<td scope="col" colspan="4">IDENTIDADE Nº: <?php echo $dadosCliente['rg']; ?></td>
						<td scope="col" colspan="5">SSP: <?php echo $dadosCliente['ssp']; ?></td>
						<td scope="col" colspan="9">CPF/MF Nº: <?php echo $dadosCliente['cpf']; ?></td>
					</tr>
					<tr>
						<td scope="col" colspan="4">NACIONALIDADE: <?php echo $dadosCliente['nacionalidade']; ?></td>
						<td scope="col" colspan="4">ESTADO CIVIL: <?php echo $dadosCliente['estado_civil']; ?></td>
						<td scope="col" colspan="4">PROFISSÃO: <?php echo $dadosCliente['profissao']; ?></td>
					</tr>
					<tr>
					<td scope="col" colspan="4">E-MAIL: <?php echo $dadosCliente['email']; ?></td>
					</tr>
					</thead>
				</table>
    	        <br/>
    	        As partes acima identificadas têm, entre si, justas e acertadas o presente <b>Contrato de Prestação de Serviços,</b> que se regerá pelas cláusulas seguintes e pelas condições de preço, forma e termo de pagamento descrito no presente:       
                <br/><br/><br/><br/>
				<b>CLÁUSULA PRIMEIRA - DO OBJETO DO CONTRATO<br/>
                Parágrafo Primeiro - O presente instrumento tem por objeto a Assessoria no Processo para Reconhecimento do Diploma:</b><br/>
                <table class="tabela-contratante table table-bordered">
    	            <thead>
                        <tr>
                          <th scope="col" colspan="12">CURSO QUE SE BUSCA RECONHECIMENTO: <?php if ($contrato[0]['assinado'] == 1) { echo $clin[0]['curso'];  } ?></th>
                        </tr>
                      </thead>
    	        </table>
    	        outorgado ao <b>CONTRATANTE</b> por <b>Universidade Estrangeira,</b> em <b>Universidade Brasileira, Pública ou Privada.</b><br/><br/><br/>
<b>Parágrafo Segundo</b> – O instrumento também contempla a assessoria, análise do projeto de pesquisa, grade curricular da universidade emitente do título, análise da dissertação escrita, desenvolvimento de pareceres técnicos a adequação necessária ao <b>reconhecimento.
CLÁUSULA SEGUNDA – DAS AÇÕES E OBRIGAÇÕES DO CONTRATADO</b>
    	    </div>
	    </div>
	</div>
	<br/>
	<hr>
	<br/>
	<div class="pagina_contrato" style="padding-top:150px;padding-left:150px;padding-right:150px;font-size:25px;">
	    <div class="row">
    	    <div class="col-lg-12">
    	        <b>Parágrafo Primeiro –</b> O <b>CONTRATADO</b> fica responsável em nomear uma equipe técnica, composta por três doutores (as), que analisarão por meio de uma <b>PRÉ-ANÁLISE TÉCNICA</b> da dissertação ou tese do (a) interessado (a) e assim emitindo um <b>Parecer Técnico Científico,</b> em que ateste a qualidade técnica do projeto.
<br/><br/>
<b>Parágrafo Segundo –</b> O cronograma a que se refere o <b>parágrafo primeiro da cláusula segunda</b> deverá ser concluído em até <b>30 (trinta) dias</b> após a assinatura deste instrumento, e tem por objetivo mensurar a qualidade da dissertação ou tese apresentada para o processo de reconhecimento.
<br/><br/>
<b>Parágrafo Terceiro –</b> A <b>PRÉ ANÁLISE TÉCNICA</b> do projeto apresentado visa avaliar a qualidade da dissertação ou tese observando os seguintes critérios:
<br/><br/>
. Revisão Ortográfica Gramatical<br/>
. Normas da ABNT<br/>
. Resumo<br/>
. Sumarização<br/>
. Introdução<br/>
. Fundamentação<br/>
. Metodologia<br/>
. Conclusão<br/>
. Bibliografia<br/>
. Coleta e Análise de Dados<br/>
. Antecedentes de Pesquisa<br/>
. Entre outros.<br/>
<br/>
<b>Parágrafo Quarto –</b> Esses critérios que serão avaliados têm como único objetivo traçar um perfil do trabalho apresentado por meio da dissertação ou tese e da qualidade acadêmica da mesma para que se busque uma instituição brasileira cujo o perfil traçado seja compatível. O resultado dessa avaliação nos ajudará a prevenir desgastes de tempo e dinheiro no processo, pois ele nos permite avaliar se o trabalho do aluno atende os critérios de avaliação daquela (s) instituição (ões).
<br/><br/><b>Parágrafo Quinto –</b> Durante um processo de reconhecimento tudo é avaliado: além dos itens acima citados, o tema da dissertação ou tese, a linha de pesquisa, a área de concentração, a equivalência nos programas, o currículo dos doutores que participaram da banca de avaliação, o currículo do orientador, o método da pesquisa, publicações de artigos científicos, práticas de pesquisa realizada durante o curso, universidade que diplomou, avaliação externa do curso, entre outros critérios usados de autonomia da universidade reconhecedora.
    	    </div>
	    </div>
	</div>
	<br/>
	<hr>
	<br/>
	
	<div class="pagina_contrato" style="padding-top:150px;padding-left:150px;padding-right:150px;font-size:25px;">
	    <div class="row">
    	    <div class="col-lg-12">
    	        <b>Parágrafo Sexto –</b> A assessoria, com base na análise técnica previamente realizada, buscará uma instituição compatível para reconhecer seu diploma, também será avaliado se as exigências dessa possível instituição reconhecedora poderá ser atendida, do contrário buscaremos outra.
<br/><br/><b>Parágrafo Sétimo – O parecer técnico não tem por objetivo reavaliar o aluno diante da diplomação adquirida,</b> nem também questionar atos acadêmicos anteriores, que cominaram com sua diplomação, <b>também não garante que após essa avaliação o diploma será reconhecido,</b> garante apenas que o avaliador durante a pré análise técnica, emita de forma técnica e objetiva, um parecer que oriente o aluno quanto a compatibilidade de sua dissertação ou tese com as instituições que poderão reconhecer seu diploma.
<br/><br/><br/>
<b>CLÁUSULA TERCEIRA – DO PRAZO DO CONTRATO<br/>
Parágrafo Primeiro –</b> O Processo de Reconhecimento de Diploma Estrangeiro no Brasil, em tese, está dividido em três partes:
<br/><br/>
    <b>• Primeira Parte – Entrada com o pedido de reconhecimento.</b> Nessa parte, entrega-se todos os documentos na instituição com o pedido de reconhecimento e aguardamos a análise desses documentos para que a instituição possa acatar ou não o pedido. <b>Tempo médio de 60 dias.</b>
<br/><br/>
    <b>• Segunda Parte – Homologação dos Documentos.</b> Nessa fase recebe-se a informação de que os documentos entregues foram homologados (aprovados). <b>Tempo médio de 3 a 5 meses.</b>
<br/><br/>
    <b>• Terceira Parte –</b> Inicia-se a análise da dissertação ou tese entregue ao colegiado da universidade reconhecedora para que seja aprovada ou não. <b>Tempo médio de 08 a 12 meses.</b>
<br/><br/><br/>
<b>Parágrafo Segundo –</b> Da entrada com o <b>Pedido de Protocolo para Reconhecimento do Título</b> até a <b>análise e parecer final do pedido de reconhecimento</b> temos um tempo médio de <b>14 a 18 meses.</b><br/><br/>
<b>Parágrafo Terceiro –</b> O tempo final pode ser menor caso o processo siga em tramitação simplificada, ou maior, dependendo do período do ano que se busca o reconhecimento.
<br/><br/><br/><br/>
<b>CLÁUSULA TERCEIRA – DO SIGILO, CONFIDENCIALIDADE E RESPONSABILIDADE</b>
    	    </div>
	    </div>
	</div>
	
	
	
	
	<div class="pagina_contrato" style="padding-top:150px;padding-left:150px;padding-right:150px;font-size:24px;">
	    <div class="row">
    	    <div class="col-lg-12">
    	        <b>Parágrafo Primeiro –</b> O <b>CONTRATADO</b> está obrigado a manter o <b>Sigilo e Confidencialidade</b> sobre todos os documentos que estiverem sob sua <b>responsabilidade,</b> comprometendo-se a não utilizar nenhuma informação ou dados em qualquer que sejam as circunstancias fora do objeto deste instrumento.
                <br/><br/>
                <b>Parágrafo Segundo –</b> O <b>CONTRATADO</b> compromete-se a não utilizar nenhum dado pessoal do <b>CONTRATANTE</b> sem autorização prévia por escrito.
                <br/><br/>
                <b>Parágrafo Terceiro –</b> O <b>CONTRATADO</b> poderá assessorar no reconhecimento do diploma o <b>CONTRATANTE</b> em qualquer <b>Universidade Brasileira, pública ou privada.</b>
                <br/><br/>
                
                <b>CLÁUSULA TERCEIRA – DAS OBRIGAÇÕES DA CONTRATANTE
                Parágrafo Primeiro</b> – O <b>CONTRATANTE</b> deverá entregar todos os documentos solicitados pelo <b>CONTRATADO.</b>
                <br/><br/>
                <b>Parágrafo Segundo</b> – O <b>CONTRATANTE</b> deverá entregar ao <b>CONTRATADO</b> a partir da assinatura desse contrato em até <b>15 (quinze) dias uteis,</b> todos os documentos abaixo relacionados por meio do <b>e-mail (juridico.xeducacional@gmail.com),</b> e fisicamente que deverá ser enviado pelos correios, através do PAC, para o seguinte endereço:
                <br/><br/>
                <b>Rua Itaboraí, nº 158 – loja 7 – Edifício Ilha de Fiji – Praia de Itaparica – Vila Velha – ES – CEP 29.102-195 – A/C do Departamento Jurídico da X Educacional.</b>
                <br/><br/>
                <b>Parágrafo Terceiro</b> – Segue a lista de documentos que deverão ser enviados para <b>X Educacional:</b>
                <br/><br/>
                <b>Envio pelo e-mail</b><br/>
                . RG<br/>
                . CPF<br/>
                . Certidão de Nascimento ou Casamento<br/>
                . Título de Eleitor comprovante de votação<br/>
                . Comprovante de Endereço atualizado<br/>
                . Certificado Reservista (homem)<br/>
                . Diploma de Graduação<br/>
                <b>. Diploma de Mestrado (caso o processo seja para Mestrado)</b><br/>
                <b>. Diploma de Doutorado (caso o processo seja para Doutorado)</b><br/>
                . Carta Constância (se possuir)<br/>
                . Declaração Acadêmica (se possuir)<br/>
                . Link para o currículo lates dos doutores da banca<br/>
                . Link para o currículo lates do orientador<br/>
                . Link para as publicações científicas<br/>
                . Resumo das atividades acadêmicas praticadas durante o curso<br/>
                . Ficha de Qualificação Pessoal do cliente preenchida e assinada<br/>
    	    </div>
	    </div>
	</div>
	<br/>
	<hr>
	<br/>
	
	<div class="pagina_contrato" style="padding-top:150px;padding-left:150px;padding-right:150px;font-size:24px;">
	    <div class="row">
    	    <div class="col-lg-12">
    	        . Contrato assinado e com firma reconhecida em cartório<br/>
                . Dissertação ou tese em Word editável e em PDF<br/>
                <br/><br/>
                <b>Envio pelos correios<br/>
                01 (uma) cópia autenticada dos documentos do cliente</b><br/>
                . RG<br/>
                . CPF<br/>
                . Certidão de Nascimento ou Casamento<br/>
                . Título de Eleitor<br/>
                . Comprovante de Endereço atualizado<br/>
                . Diploma de Graduação<br/>
                <b>. Diploma de Mestrado (caso o processo seja para Mestrado)<br/>
                . Diploma de Doutorado (caso o processo seja para Doutorado)<br/>
                <br/>
                01 (uma) cópia simples dos documentos do cliente</b><br/>
                . Comprovante de votação<br/>
                . Carta Constância (se possuir)<br/>
                . Declaração Acadêmica (se possuir)<br/>
                . Ficha de Qualificação Pessoal do Cliente preenchida e assinada<br/>
                <br/>
                <b>Outros documentos a serem enviados</b><br/>
                . Contrato devidamente assinado e com firma reconhecida em cartório<br/>
                . Dissertação ou tese encadernada em espiral<br/>
                . Resumo das atividades acadêmicas realizada durante o curso<br/>
                <br/>
                <b>Documentos dos Doutores da Banca e do Orientador</b><br/>
                . Ficha de Qualificação Pessoal dos Doutores da banca de avaliação e do Orientador devidamente preenchida e assinada<br/>
                . Rg<br/>
                . CPF<br/>
                . Comprovante de Endereço<br/>
                . Diploma de Graduação<br/>
                <b>. Diploma de Mestrado (caso o processo seja para Mestrado)</b><br/>
                <b>. Diploma de Doutorado (caso o processo seja para Doutorado)</b><br/>
                . Currículo resumido<br/>
                <b>Outros Documentos</b><br/>
                <div style="padding-left:80px">
                    • Dissertação ou tese em Word editável gravada num pendrive.
                <br/><br/>
                <b>Obs.: “Havendo necessidade de outros documentos o (a) interessado (a) será informado (a), sendo que o prazo será estipulado pelo CONTRATADO para apresentação.</b>
                </div>
                <br/><br/>
                
                <b>CLÁUSULA QUARTA – DO VALOR E FORMA DE PAGAMENTO<br/>
                Parágrafo Primeiro</b> – O (A) <b>CONTRATANTE</b> pagará ao <b>CONTRATADO</b> para a assessoria ao processo de reconhecimento o valor de:
    	    </div>
	    </div>
	</div>
	<br/>
	<hr>
	<br/>
	<div class="pagina_contrato" style="padding-top:150px;padding-left:150px;padding-right:150px;font-size:24px;">
	    <div class="row">
    	    <div class="col-lg-12">
    	        <b>. MESTRADO OU DOUTORADO - R$ 3.500,00 (Três mil e quinhentos reais)</b>
                <br/><br/>
                Pagos da seguinte forma:
                <br/><br/>
                <table class="tabela-contratante table table-bordered">
    	            <thead>
                        <tr>
                          <th scope="col" colspan="3">&nbsp;</th>
                        </tr>
                        <tr>
                          <td scope="col" style="text-align:center;font-weight:bolder;font-size:24px;">1º PARCELA</td>
                          <td scope="col" style="text-align:center;font-weight:bolder;font-size:24px;">R$ 1.500,00</td>
                          <td scope="col" style="text-align:center;font-weight:bolder;font-size:24px;">Na Contratação</td>
                        </tr>
                        <tr>
                          <td scope="col" style="text-align:center;font-weight:bolder;font-size:24px;">04</td>
                          <td scope="col" style="text-align:center;font-weight:bolder;font-size:24px;">R$ 500,00</td>
                          <td scope="col" style="text-align:center;font-size:24px;">30/60/90/120 DIAS</td>
                        </tr>
                      </thead>
    	        </table>
                <br/>
                <b>Parágrafo Segundo</b> – O pagamento da entrada no ato da contratação será por meio de depósito ou transferência bancária para a seguinte contra:
                
                <b>AS Assessoria e Consultoria em Educação<br/>
                CNPJ 31.281.703/0001-69<br/>
                Caixa Econômica Federal<br/>
                Agência – 003 (jurídica)<br/>
                C/c 332-5</b><br/><br/>
                
                <b>Parágrafo Terceiro</b> – As demais parcelas deverão ser pagas por meio de boletos bancários que serão enviados por e-mail e via Whatsapp, e poderão ser pagos em qualquer agência bancária ou casa lotérica no Brasil.
                <br/><br/>
                <b>Parágrafo Quarto</b> – As Universidades Reconhecedoras cobram taxas pelo processo, que variam de acordo com a Instituição, se é pública ou privada. Algumas cobram uma única taxa, outras cobram na homologação de documentos e no deferimento do reconhecimento do diploma.
                <br/><br/>
                <b>Parágrafo Quinto</b> – As taxas pagas as Universidades variam em valores, podendo estar entre <b>R$ 500,00 e R$ 2.000,00,</b> porém esses valores podem ser maiores e menores dependendo da Universidade em que for pleiteado o reconhecimento. O fato é que o real valor dessas taxas só teremos a informação quando encontrarmos a Universidade que iremos pleitear o início do seu processo. Por essa razão o <b>CONTRATANTE</b> tem ciência nesse ato que os valores das taxas e as datas de pagamento serão conhecidas após a aceitação do pedido de reconhecimento pela instituição reconhecedora.
                <br/><br/>
                <b>Parágrafo Sexto</b> – O <b>CONTRATANTE</b> aceita a condição prevista no <b>parágrafo quinto da cláusula quarta,</b> e toma ciência que os pagamentos dessas taxas serão realizados diretamente as instituições responsáveis pelo processo de reconhecimento, por meio de boletos, caso seja uma instituição privada, ou GRU, caso seja uma pública, e isenta a CONTRATADA de qualquer responsabilidade com o (s) pagamento (s) dessa (s) taxa (s).
                <br/><br/>
                <b>Parágrafo Sétimo</b> – O <b>CONTRATANTE</b> toma ciência que o <b>COLEGIADO</b> contratado pela <b>X EDUCACIONAL</b> para avaliação da qualidade da dissertação ou tese cobrará pelo serviço o valor de <b>R$ 400,00</b>
    	    </div>
	    </div>
	</div>
	<br/>
	<hr>
	<br/>
	<div class="pagina_contrato" style="padding-top:150px;padding-left:150px;padding-right:150px;font-size:24px;">
	    <div class="row">
    	    <div class="col-lg-12">
    	        <b>(quatrocentos reais)</b> por Doutor, e em caso de rescisão contratual, esse valor deverá ser pago.
                <br/><br/>
                <br/>
                <b>CLÁUSULA QUINTA – DO PRAZO DESSE INSTRUMENTO
                Parágrafo Único</b> – O prazo de duração deste instrumento de contrato será <b>indeterminado,</b> podendo ser rescindido por ambas as partes mediante aviso prévio <b>de 60 (sessenta) dias,</b> com base nas hipóteses previstas na <b>CLÁUSULA SEXTA.</b>
                <br/>
                <br/><br/>
                <b>CLÁUSULA SEXTA – DA RESCISÃO
                Parágrafo Primeiro</b> – O <b>CONTRATANTE</b> poderá rescindir esse contrato caso a <b>CONTRATADO</b> não cumpra com o acordado nesse instrumento.
                <br/><br/>
                <b>Parágrafo Segundo</b> - O <b>CONTRATADO</b> poderá rescindir esse contrato caso a <b>CONTRATANTE</b> não venha apresentar os documentos solicitados pelo <b>CONTRATADO,</b> ou sem justa causa, descumprir qualquer uma das cláusulas desse instrumento.
                <br/><br/>
                <b>Parágrafo Terceiro</b> – Caso a rescisão ocorrer por negligência do <b>CONTRATADO</b> o valor aferido na operação deverá ser devolvido conforme o previsto na <b>Cláusula Quarta - Parágrafo Primeiro,</b> acrescida de juros e correção monetária conforme legislação vigente.
                <b>Parágrafo Quarto</b> – Se a rescisão ocorrer por negligência do <b>CONTRATANTE</b> os valores percebidos não serão devolvidos, antes, porém, o <b>CONTRATADO</b> deverá esgotar todas as formas de notificação, comunicação, contato com o <b>CONTRATANTE,</b> seja por carta, e-mail, WhatsApp ou ligações telefônicas, para que o <b>CONTRATANTE</b> possa sanar as pendências, seja financeira ou documental. 
                <br/><br/>
                <b>Parágrafo Quinto</b> – Se a rescisão ocorrer de forma amigável o <b>CONTRATADO</b> devolverá os valores recebidos na operação, retendo os valores referentes aos pagamentos de taxas que por ventura tenham sido pagas junto as Universidades e custas operacionais dos serviços executados.
                <br/><br/>
                <b>Parágrafo Sexto</b> – No caso da <b>pré-análise técnica</b> detectar uma dissertação ou tese com problemas para reconhecimento, ou que por alguma razão não encontrarmos uma instituição compatível, haverá a consequente rescisão do contrato, será cobrado uma taxa administrativa no valor de <b>R$ 1.200,00 (hum mil e duzentos reais)</b> para cobrir às custas da pré-análise técnica e contratação de doutores (as) para realização dos pareceres.
                <br/><br/>
                <br/>
                <br/>
                <br/>
                <b>CLÁUSULA SETIMA – DA INADIMPLÊNCIA<br/>
                Parágrafo Primeiro</b> – Caso o <b>CONTRATANTE</b> não cumpra com suas responsabilidades financeiras, e tiver suas parcelas
    	    </div>
	    </div>
	</div>
	<br/>
	<hr>
	<br/>
	<div class="pagina_contrato" style="padding-top:150px;padding-left:150px;padding-right:150px;font-size:24px;">
	    <div class="row">
    	    <div class="col-lg-12">
    	        atrasadas, será incidido sobre o valor da (s) parcela (s) em atraso uma multa de <b>2% (dois por cento)</b> e juros de mora de <b>1% (um por cento)</b> ao mês e correção monetária.
                <br/><br/>
<b>Parágrafo Primeiro</b> – Em <b>Caso de cobrança judicial,</b> devem ser acrescidas as custas processuais e <b>20% (vinte por cento)</b> de honorários advocatícios, além de ter o nome apontado nos <b>Órgãos de Proteção ao Crédito (SPC, SCPC e SERASA).</b>
<br/><br/>
<br/>
<b>CLÁUSULA SETIMA - DO FORO</b>
Fica eleito, com renúncia de qualquer outro, por mais privilegiado que seja, o <b>Foro da Cidade do CONTRATANTE,</b> para dirimir quaisquer dúvidas oriundas do presente instrumento.
<br/><br/>
E, por estarem assim, justos e acertados, assinam este <b>Contrato</b> em <b>02 (duas) vias</b> de igual teor e forma.
<br/><br/>
&nbsp;&nbsp;<b>Vitória - ES, <?php setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese'); 
if ($contrato[0]['assinado'] == 1){ 
    echo utf8_encode( strftime("%d de %B de %Y", strtotime($contrato[0]['data_assinatura']) ) ); } else { echo utf8_encode( strftime("%d de %B de %Y", strtotime(date('Y-m-d H:i:s')) ) ); } ?></b><br/><br/><br/><br/>
<table class="tabela-contratante table table-bordered">
    	            <thead>
                        <tr>
                          <td scope="col" style="text-align:center;font-weight:bolder;font-size:24px;">X EDUCACIONAL<br/>CONTRATADO</td>
                          <td scope="col" style="text-align:center;font-weight:bolder;font-size:24px;">CONTRATANTE</td>
                        </tr>
                        <tr>
                          <td scope="col" style="text-align:center;font-weight:normal;font-size:23px;font-family: 'Cedarville Cursive', cursive;"><?php  if ($contrato[0]['assinado'] == 1) { echo 'Alexandre Salvador'; } ?></td>
                          <td scope="col" style="text-align:center;font-weight:normal;font-size:23px;font-family: 'Cedarville Cursive', cursive;"><?php if ($contrato[0]['assinado'] == 1) { echo $clin[0]['nome'].' '.$clin[0]['sobrenome']; } ?></td>
                        </tr>
                      </thead>
    	        </table>
    	    </div>
	    </div>
	</div>
	
    <?php if ($contrato[0]['assinado'] == 0 && !isset($visualizando)){ ?>
    <br/><br/>
    <a href="javascript:assinar_contrato()"><button type="button" class="btn btn-danger" style="width:1380px;"><i class="fa fa-pencil"></i> Assinar Contrato</button></a>
    <br/><br/>
    <?php } else { ?>
    <div style="padding-top:20px;">
    <b>DADOS DO FINGERPRINT</b>
    <div class="panel panel-default">
      <div class="panel-body">
          <table class="tabela-contratante table table-bordered" style="max-width:100%;">
    	            <thead>
    	            <?php $finger = json_decode($contrato[0]['fingerprint']);
    	            foreach($finger as $obj){
    	                $valor = "";
    	                escreveArr($obj->value, $valor);
                          echo '<tr><td scope="col"><b>'.$obj->key.'</b></td>';
                        echo '<td scope="col">'.$valor.'</td></tr>';
                        } ?>
                      </thead>
    	        </table>
      </div>
    </div>
    	        
    </div>
    <?php } ?>
</div>
<!-- Modal -->
		<div class="modal fade" id="assinarContrato" tabindex="-1" role="dialog" aria-labelledby="assinarContrato" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h4 class="modal-title" id="exampleModalCenterTitle"><i class="fa fa-pencil"></i> Assinar Contrato</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
    			  <div class="modal-body">
    						<div class="alert alert-info alert-dismissible fade show" role="alert">
    						  <strong><i class="fa fa-exclamation-triangle"></i> ATENÇÃO!</strong><br/> Ao clicar em assinar contrato você confirma que leu e concorda com todos os termos escritos no contrato.</b>
    						</div>
    			  </div>
    			  <div class="modal-footer">
    				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
    				<a href="<?php echo site_url('assinar_contrato/assinar/'.$contrato[0]['url_contrato']); ?>"><button type="button" class="btn btn-danger">Assinar Contrato</button></a>
    			  </div>
			</div>
		  </div>
		</div>

<script>
    function assinar_contrato(){
        $('#assinarContrato').modal('show');
    }
</script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Open+Sans&display=swap" rel="stylesheet">
		<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    .pagina_contrato{
        /* background-image:url('<?php echo site_url('uploads/background-contrato.jpg'); ?>'); */
        width: 1380px;
        height: 1950px;
        font-family: "Courier New", Courier;
    }
</style>




<!-- 
<h1><?php echo $dadosModelContrato['titulo'];?></h1>
<div>
	<strong>CONTRATADO: <?php echo $dadosEmpresa['nome_fant'];?>, </strong><?php echo $dadosEmpresa['desc'];?>
</div>
<div>
	<strong>CONTRATANTE: <?php echo '';?>, </strong>
</div>

<div>
	<?php echo $dadosModelContrato['contrato_txt'];?>
</div>

<!-- 
	<pre>
		<?php print_r($dadosEmpresa);?>
		<hr>
		<?php print_r($dadosCliente);?>
		<hr>
		<?php print_r($dadosContrato);?>
		<hr>
		<?php print_r($dadosModelContrato);?>
	</pre>
 --> -->