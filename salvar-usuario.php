<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $comando = "INSERT INTO usuarios (nome,
                email, senha, data_nasc) VALUES (
                '{$nome}', '{$email}', '{$senha}'
                , '{$data_nasc}')";

            $resultado = $conexao->query($comando);

            if($resultado==true){
                print "<script>alert('Cadastro realizado com sucesso');</script>";
                print "<script> location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $comando ="UPDATE usuarios SET
                nome='{$nome}',
                email='{$email}',
                senha='{$senha}',
                data_nasc='{$data_nasc}'
            WHERE
                id=".$_REQUEST["id"];

            $resultado = $conexao->query($comando);

            if($resultado==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script> location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'excluir':

            $comando = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $resultado = $conexao->query($comando);

            if($resultado==true){

                print "<script>alert('Excluído com sucesso');</script>";
                print "<script> location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
        
    }
?>