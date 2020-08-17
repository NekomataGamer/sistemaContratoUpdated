
<!-- <html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="UTF-8">
    </head>
    <body>
       <h4> Olá, <?php echo utf8_decode($dadosCliente['nome']." ".$dadosCliente['sobrenome']);?></h4>
       <p>É com prazer que nós dá <?php echo $dadosEmpresa['nome_fant'];?>lhe enviamos o contrato de <?php echo $dadosModeloContrato['titulo'];?>!</p>
    </body>
</html> -->

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="UTF-8">
    </head>
    <body>
       <h4> Olá, <?php echo $dadosCliente['nome']." ".$dadosCliente['sobrenome'];?></h4>
       <p>É com prazer que nós dá <?php echo $dadosEmpresa['nome_fant'];?> lhe enviamos o contrato de <?php echo $dadosModeloContrato['titulo'];?>!</p>
       <a href="<?php echo $dadosContrato['link'];?>">Clique aqui</a>
    </body>
</html>