<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastro</title>
</head>
<body>


    <h1>Sistema de controle de usuários</h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=novo">
                        Novo Usuário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=listar">
                        Listar Usuários</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                    include("conexaoBanco.php");
                    /* o @ faz o mesmo que a função nativa isset()*/
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("novo-usuario.php");
                        break;
                        case "listar";
                            include("listar-usuario.php");
                        break;
                        case "salvar":
                            include("salvar-usuario.php");
                        break;
                        case "editar":
                            include("editar-usuario.php");
                        break;
                            default:
                                print "<h1>Bem Vindos!</h1>";
                                print "<p>Escolha alguma operação disponível no nosso sistema.</p>";
                                print "<p>As opções estão disponíveis no nosso menu superior.</p>";
                    }
                ?>
            </div>
        </div>
    </div>



    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>