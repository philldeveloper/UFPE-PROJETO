<?php

include_once "actions.php";

connectar();

if(isset($_POST['nomeSolicitante'])){
    create($_POST['nomeSolicitante'], $_POST['ruaSolicitante'], $_POST['compSolicitante'],);
    header("Location: index.php");
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
    <h3 class="py-3">Cadastrar Reclamação de Comida</h3>
    <form action="create.php" method="post" enctype="multipart/form-data">

        <h1>Dados do Solicitante</h1><hr>
        <label for="">Descreva a Queixa</label>
        <textarea class="form-control" name="descricaoQueixa" id="" cols="30" rows="3"></textarea>
        <label for="">Observações da Queixa</label>
        <textarea class="form-control" name="observacaoQueixa" id="" cols="30" rows="3"></textarea>
        <input type="text" class="form-control my-2" placeholder="Nome do Solicitante" name="nomeSolicitante" required>
        <div class="d-flex">
            <input type="text" class="form-control my-2" placeholder="Rua do Solicitante" name="ruaSolicitante" required>
            <input type="text" class="form-control my-2" placeholder="Comp do Solicitante" name="compSolicitante" required>
            <input type="text" class="form-control my-2" placeholder="Bairro do Solicitante" name="bairroSolicitante" disabled>
        </div>
        <div class="d-flex">
            <input type="text" class="form-control my-2" placeholder="Cidade do Solicitante" name="cidadeSolicitante" disabled>
            <input type="text" class="form-control my-2" placeholder="Estado do Solicitante" name="ufSolicitante" disabled>
            <input type="text" class="form-control my-2" placeholder="CEP do Solicitante" name="cepSolicitante" disabled>
        </div>
        <div class="d-flex">
            <input type="text" class="form-control my-2" placeholder="tel do Solicitante" name="telSolicitante" disabled>
            <input type="email" class="form-control my-2" placeholder="Email do Solicitante" name="emailSolicitante" disabled>
        </div>

        <h1>Dados da Reclamação</h1>

        <input type="text" class="form-control my-2" placeholder="nomeVitima" name="nomeVitima" disabled>
        <div class="d-flex">
            <input type="text" class="form-control my-2" placeholder="Rua da Vitima" name="ruaVitima" disabled>
            <input type="text" class="form-control my-2" placeholder="Comp da Vitima" name="compVitima" disabled>
            <input type="text" class="form-control my-2" placeholder="Bairro da Vitima" name="bairroVitima" disabled>
        </div>
        <div class="d-flex">
            <input type="text" class="form-control my-2" placeholder="Cidade da Ocorrencia" name="cidadeVitima" disabled>
            <input type="text" class="form-control my-2" placeholder="Estada da Vitima" name="ufVitima" disabled>
            <input type="text" class="form-control my-2" placeholder="CEP da Vitima" name="cepVitima" disabled>
        </div>
        <input type="text" class="form-control my-2" placeholder="tel da Vitima" name="telVitima" disabled>

        <hr>
        <button type="submit" class="btn btn-primary" name="enviar">Cadastrar</button>
    </form>
    </div>
</body>
</html>