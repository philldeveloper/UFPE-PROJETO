<?php

include_once "Actions.php";
connectar();
getAnimalComplaints();

if(isset($_POST['id']))
    delete($_POST['id']);
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
    <div class="container mt-5 d-flex justify-content-between">
        <h3>Reclamações</h3>
        <div class="d-flex">
            <a class="btn btn-secondary" href="create.php" type="button">Criar Reclamação Animal</a>
            <a class="btn btn-secondary ms-2 me-2" href="create_food.php" type="button">Criar Reclamação Comida</a>
            <a class="btn btn-secondary me-2" href="#" type="button">Criar Reclamação Outros</a>
        </div>
    </div>
    <div class="container mt-4">
        <table class="container table table-bordered">
            <thead>
                <th>Solicitante</th>
                <th>Tipo</th>
                <th>Rua</th>
                <th>Complemento</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                    $dados = getAnimalComplaints();

                    while ($d = $dados->fetch_array()) {
                        echo "<tr>";
                        echo "<td>{$d['nomeSolicitante']}</td>";
                        echo "<td>--</td>";
                        echo "<td>{$d['ruaSolicitante']}</td>";
                        echo "<td>{$d['compSolicitante']}</td>";
                        echo "<td class='d-flex justify-content-evenly'>
                                <a class='btn btn-sm btn-light' href='edit.php?id={$d['id']}'>Editar</a>
                                <form method='POST' action='index.php'>
                                    <input type='hidden' name='id' value='{$d['id']}' required>
                                    <button class='btn btn-sm btn-danger' type='submit' name='deletar'>Remover</button>
                                </form>
                             </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>