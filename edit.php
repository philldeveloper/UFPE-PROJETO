<?php

include_once "Actions.php";
connectar();

$id = $_GET['id'];

//pega o usuario pelo id
$user = show($id);

if(mysqli_num_rows($user) > 0) {
    $row = mysqli_fetch_assoc($user);
}

if(isset($_POST['nomeSolicitante'])){
    update($_POST['nomeSolicitante'], $_POST['ruaSolicitante'], $_POST['compSolicitante'], $_POST['id']);
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
    <div class="container mt-5">
    <h3 class="py-3">Editar Reclamação</h3>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php $id?>" required>
        <input type="text" class="form-control my-2"  value="<?php echo $row['nomeSolicitante']?>" name="nomeSolicitante" required>
        <input type="text" class="form-control my-2"  value="<?php echo $row['ruaSolicitante']?>" name="ruaSolicitante" required>
        <input type="text" class="form-control my-2"  value="<?php  echo $row['compSolicitante']?>" name="compSolicitante" required>

        <button type="submit" class="btn btn-primary" name="enviar">Atualizar</button>
    </form>
    </div>
</body>
</html>