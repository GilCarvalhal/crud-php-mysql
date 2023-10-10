<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]); // "md5" - Para senha não ficar exposta para o usuário quando cadastrar.
        $data_nasc = $_POST["data_nasc"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUE(
            '{$nome}', '{$email}', '{$senha}', '{$data_nasc}'
        )";

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!')</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar!')</script>";
            print "<script>location.href='?page=listar'</script>";
        };

        break;
    case 'editar':
        # code...
        break;
    case 'excluir':
        # code...
        break;

    default:
        # code...
        break;
}
