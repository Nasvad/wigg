<?php 
    session_start();
    include("bd.php");
    
    $sql = sprintf("SELECT id_colaborador FROM %s WHERE email = '%s'", $tabela_colaborador, $_POST["email"]);

    $contagem = $conn->query($sql);

    if($contagem->rowCount() > 0) {
        $_SESSION["cadastro_colaborador_sucesso"] = false;
    }else {

        $extensao_arquivo = "." . explode("/", $_FILES["img"]["type"])[1];
        $arquivo = $_POST["email"] . $extensao_arquivo;
        $arquivo_p_banco = "img_cdn/" . $arquivo;
        move_uploaded_file($_FILES["img"]["tmp_name"], "../img_cdn/" . $arquivo);

        $statement = $conn->prepare("INSERT INTO colaborador(nome, email, senha, endereco, whatsapp, telefone, idade, img) VALUES(:nome, :email, :senha, :endereco, :whatsapp, :telefone, :idade, :img)");
        $statement->bindParam(":nome", $_POST["nome"], PDO::PARAM_STR);
        $statement->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
        $statement->bindParam(":senha", $_POST["senha"], PDO::PARAM_STR);
        $statement->bindParam(":endereco", $_POST["endereco"], PDO::PARAM_STR);
        $statement->bindParam(":whatsapp", $_POST["whatsapp"], PDO::PARAM_STR);
        $statement->bindParam(":telefone", $_POST["telefone"], PDO::PARAM_INT);
        $statement->bindParam(":idade", $_POST["idade"], PDO::PARAM_INT);
        $statement->bindParam(":img", $arquivo_p_banco, PDO::PARAM_STR);
        $statement->execute();

        $_SESSION["cadastro_colaborador_sucesso"] = true;
    }

    header("Location: ../contact.php")
?>