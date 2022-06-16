<?php 
    session_start();
    include("bd.php");

    $sql = sprintf("SELECT id_cliente FROM %s WHERE email = '%s'", $tabela_cliente, $_POST["email"]);

    $contagem = $conn->query($sql);

    if($contagem->rowCount() > 0) {
        $_SESSION["cadastro_sucesso"] = false;
    }else {
        $statement = $conn->prepare("INSERT INTO ". $tabela_cliente ."(nome, email, senha, idade) VALUES(:nome, :email, :senha, :idade)");
        $statement->bindParam(":nome", $_POST["nome"], PDO::PARAM_STR);
        $statement->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
        $statement->bindParam(":senha", $_POST["senha"], PDO::PARAM_STR);
        $statement->bindParam(":idade", $_POST["idade"], PDO::PARAM_INT);

        $statement->execute();
        $_SESSION["cadastro_sucesso"] = true;
    }

    header("Location: ../cadastro.php");
?>