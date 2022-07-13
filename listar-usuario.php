<h1>Listar Usuários</h1>
<?php
    $comando = "SELECT * FROM usuarios";

    $resultado = $conexao->query($comando);

    $qtd = $resultado->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover'>";

            print "<tr>";
            print "<th>#</th>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Data de Nascimento</th>";
            print "<th>Ações</th>";
            print "</tr>";


        while($row = $resultado->fetch_object()){
            /* adicionei uma ação em js ao botao, pois ele está fora de um form */
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->data_nasc."</td>";
            print "<td> 

                <button onclick=\"location.href='?page=editar&id=".$row->id."';\"class='btn
                     btn-success'>Editar</button>

                <button onclick=\"if(confirm('Tem certeza de que deseja
                excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\"
                class='btn btn-danger'>Excluir</button>

                </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print"<p class='alert alert-danger'>Não encontrou resultados!</p>";
    }
    ?>

