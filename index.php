<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <header>
            <h2>Relação de usuários</h2>
        </header>
        <form method="post" action="index.php">
            <div>
                <label for="busca"></label>
                <input type="text" id="busca" name="busca" placeholder="id ou nome" />
                <input type="submit" id="search" name="search" value="Pesquisar" />
            </div>
            <div>
                <a href='#'>Adicionar</a>
            </div>
        </form>
        <table>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <?php
            $buscar = "";
            //Receber o valor do campo busca
            if (isset($_POST['busca'])) {
                $buscar = $_POST['busca'];
            }
            include_once('controller/buscarDados.php');
            $Dados = new buscarDados();
            $Entrada = $Dados->buscardados($buscar);
            //print_r($Entrada);
            //Validando se houve retorno:
            if (empty($Entrada)) {
                echo "<script>alert('Não encontrado!')</script>";
                header('Refresh: 0');
            } else {
                $i = sizeof(($Entrada));
                while ($i > 0) {
                    $i--;
                    $id = $Entrada[$i]['alphanumeric'];
                    $nome = $Entrada[$i]['name'];
                    $telefone = $Entrada[$i]['phone'];
                    $email = $Entrada[$i]['email'];

                    echo "<tr>
                   <td >$id</td>
                   <td>$nome</td>
                   <td>$telefone</td>
                   <td>$email</td>
                   <td><a href='#'>Editar</a></td>
                   <td><a href='#'>Excluir</a></td>              
               </tr>";
                }
            }

            ?>
        </table>
    </main>
</body>

</html>