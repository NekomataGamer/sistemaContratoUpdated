<div class="container pd-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                <li class="breadcrumb-item"><a href="<?php echo BASE_URL;?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Adicionar Cliente</li>
            </ol>
            </nav>
            <h4 class="mg-b-0 tx-spacing--1">Adicionar Cliente</h4>
        </div>
    </div>
</div>

<?php if(isset($msg_info) && $msg_info[0] == 'success'):?>
    <div class="alert alert-success"><?php echo $msg_info[1];?></div>
<?php elseif(isset($msg_info) && $msg_info[0] == 'error'):?>
    <div class="alert alert-danger"><?php echo $msg_info[1];?></div>
<?php endif;?>
<form method="POST" enctype="multipart/form-data">

<div class="form-group">
    <label for="formGroupExampleInput" class="d-block">Empresa</label>
    <select name="empresa" class="form-control" id="empresa">
      <option value="">Selecione Uma empresa</option>
      <?php foreach($empresasList as $item):?>
        <option value="<?php echo $item['id'];?>"><?php echo $item['nome_fant'];?></option>
      <?php endforeach;?>
    </select>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput" class="d-block">Nome</label>
    <input type="text" class="form-control" placeholder="Enter your firstname" name="nome">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Sobrenome</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="sobrenome">
  </div>


  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Nascimento</label>
    <input type="date" class="form-control" name="nascimento">
  </div>


  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Telefone Residencial</label>
    <input type="text" class="form-control phone_with_ddd" placeholder="Enter your lastname" name="telefone">
  </div>


  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Celular</label>
    <input type="text" class="form-control phone_with_ddd2" placeholder="Enter your lastname" name="celular">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">CPF</label>
    <input type="text" class="form-control cpf" placeholder="Enter your lastname" name="cpf" onblur="validarCPF(this.value)">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">RG</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="rg">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">SSP</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="ssp">
  </div>
  
  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Profissão</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="profissao">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Nacionalidade</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="nacionalidade">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Estado Civil</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="estado_civil">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Curso</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="curso">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">CEP</label>
    <input type="text" class="form-control cep" placeholder="Enter your lastname" name="cep" onblur="pesquisacep(this.value)">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Rua</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="rua" id="rua">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Número</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="numero">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Bairro</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="bairro" id="bairro">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Complemento</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="complemento">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Edifício</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="edificio">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">Cidade</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="cidade" id="cidade">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">UF</label>
    <input type="text" class="form-control" placeholder="Enter your lastname" name="uf" id="uf">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2" class="d-block">E-mail</label>
    <input type="email" class="form-control" placeholder="Enter your lastname" name="email">
  </div>  

    <div class="form-group">
        <label for="formGroupExampleInput" class="d-block">Retorno</label>
        <select name="retorno_contrato" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>

  <div class="form-group">
      <label for="formGroupExampleInput" class="d-block">Arquivo de Contrato</label>
      <input type="file" class="form-control" name="arquivo_contrato">
  </div>

  <div class="form-group" id="meu_pau">
    <label for="formGroupExampleInput2" class="d-block" id="">Tipo de Contrato</label>
    <select name="tipo_contrato" id="tipo_contrato" class="form-control">
      
    </select>
  </div>
  

  <button class="btn btn-primary" type="submit">Adicionar e enviar Contrato</button>
  <button class="btn btn-secondary" type="cancel">Cancelar</button>
</form>

<script src="<?php echo BASE_URL;?>assets/lib/jquery/jquery.min.js"></script>
<script src="<?php echo BASE_URL;?>assets/js/jquery.mask.js"></script>

<script>
  $('.phone_with_ddd').mask('(00) 0000-0000');
  $('.phone_with_ddd2').mask('(00) 9 0000-0000');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.rg').mask('0.000.000-AA');
  $('.cep').mask('00000-000', {reverse: true});
</script>

<script>
  function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
    document.getElementById('ibge').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    document.getElementById('uf').value=(conteudo.uf);
    // document.getElementById('ibge').value=(conteudo.ibge);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('uf').value="...";
        // document.getElementById('ibge').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
  function validarCPF(cpf) {
    if (typeof cpf !== "string") return false
    cpf = cpf.replace(/[\s.-]*/igm, '')
    if (
        !cpf ||
        cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999" 
    ) {
      Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'O CPF é inválido',
  footer: 'Corrija o CPF'
})
    }
    var soma = 0
    var resto
    for (var i = 1; i <= 9; i++) 
        soma = soma + parseInt(cpf.substring(i-1, i)) * (11 - i)
    resto = (soma * 10) % 11
    if ((resto == 10) || (resto == 11))  resto = 0
    if (resto != parseInt(cpf.substring(9, 10)) ) Swal.fire({
      icon: 'error',
  title: 'Oops...',
  text: 'O CPF é inválido',
  footer: 'Corrija o CPF'
})
    soma = 0
    for (var i = 1; i <= 10; i++) 
        soma = soma + parseInt(cpf.substring(i-1, i)) * (12 - i)
    resto = (soma * 10) % 11
    if ((resto == 10) || (resto == 11))  resto = 0
    if (resto != parseInt(cpf.substring(10, 11) ) ) Swal.fire({
      icon: 'error',
  title: 'Oops...',
  text: 'O CPF é inválido',
  footer: 'Corrija o CPF'
})
    
}
</script>
