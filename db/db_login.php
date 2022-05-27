<?php 
    session_start();
    require("bd.php");

    $sql = sprintf("SELECT * FROM cliente WHERE nome = '%s' AND senha = '%s' OR email = '%s' AND senha = '%s'", $_POST["nome"], $_POST["senha"], $_POST["nome"], $_POST["senha"]);
    $result = $conn->query($sql, MYSQLI_BOTH);

    if($result->rowCount() > 0) {
        $_SESSION["connected"] = 1;
        $_SESSION["verificado"] = 1;
    }else {
        $_SESSION["connected"] = 0;
        $_SESSION["verificado"] = 1;
    }

    header("Location: ../login.php");
?>