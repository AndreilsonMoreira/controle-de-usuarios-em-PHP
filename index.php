<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/listarUsuarios.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <main>
        <header>
            <h2>Relação de usuários</h2>
            <hr/>
        </header>
        <form method="post" action="index.php" class="formBuscarUsuario">
            <div class="campoBuscaUsuario">
                <label for="busca"></label>
                <input type="text" id="busca" name="busca" placeholder="Digite o id ou nome do usuário para a busca" />
                <button type="submit" id="search" name="search" value="Pesquisar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg> Buscar </button>
            </div>          

        </form>
        <div>
            <a href='#'>Adicionar</a>
        </div>
        <table class="cabecario">
        <th scope="col" id="id">Id</th>
            <th scope="col" id="nome">Nome</th>
            <th scope="col" id="telefone">Telefone</th>
            <th scope="col" id="email">E-mail</th>
            <th scope="col" id="editar"></th>
            <th scope="col" id="excluir"></th>

            </table>
        <div id="listaUsuarios">        
        <table class="tabela">          
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

                    echo "<tr id='linhaTabela'>
                   <td >$id</td>
                   <td>$nome</td>
                   <td>$telefone</td>
                   <td>$email</td>
                   <td '><a href='#' id='btnEditar'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                   <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                 </svg> Editar</a></td>
                   <td ><a href='#' id='btnExcluir'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                   <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                 </svg> Excluir</a></td>              
               </tr>";
                }
            }

            ?>
        </table>
        </div>
        <footer>
        <p>&#169;Todos os direitos reservados</p>
    </footer>
    </main>
    
</body>

</html>