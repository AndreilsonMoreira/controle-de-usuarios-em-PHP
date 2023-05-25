<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>
    <link href="../css/adicionarUsuarios.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <main>
        <header>
            <h2>Cadastro de usuários</h2>
            <hr />
        </header>
        <?php

        //variáveis para povoar os campos no caso de edição
        $matricula = "";
        $nome = "";
        $telefone = "";
        $email = "";
        $endereco = "";
        $numero = "";
        $bairro = "";
        $cidade = "";
        $pais = "";
        $cep = "";

        if (isset($_POST["addUsuario"])) {
            echo '<script>alert("Clicou em add usuário!")</script>';
        } else {
            $id = empty($_GET['id']) ? 0 : $_GET['id'];
            if ($id != 0) {
                include_once('../controller/dadosUsuarios.php');
                $usuario = new dadosUsuarios();
                $dados = $usuario->buscardados($id);           

                //variáveis para povoar os campos no caso de edição
                $matricula = $dados[0]['alphanumeric'];
                $nome = $dados[0]['name'];
                $telefone = $dados[0]['phone'];
                $email = $dados[0]['email'];
                $endereco = $dados[0]['address'];
                $numero = $dados[0]['numberrange'];
                $bairro = '';
                $cidade = $dados[0]['region'];
                $estado = '';
                $pais = $dados[0]['country'];
                $cep = $dados[0]['postalZip'];
            }
        }
        ?>
        <form method="post" action="#" class="formBuscarUsuario">

            <div id="camposForme">
                <div>
                    <label for="matricula"></label>
                    <input type="text" id="matricula" name="matricula" maxlength="20" minlength="8" required placeholder=" Matrícula" value='<?php echo $matricula ?>' />
                </div>
                <div>
                    <label for="nomeUsuario"></label>
                    <input type="text" id="nomeUsuario" name="nomeUsuario" maxlength="50" minlength="8" required placeholder=" Nome completo" value='<?php echo $nome ?>' />
                </div>
            </div>
            <div id="camposForme">
                <div>
                    <label for="telefoneUsuario"></label>
                    <input type="text" id="telefoneUsuario" name="telefoneUsuario" maxlength="13" minlength="11" required placeholder=" Telefone: (xx)xxxxx-xxxx" value='<?php echo $telefone ?>' />
                </div>
                <div>
                    <label for="emailUsuario"></label>
                    <input type="text" id="emailUsuario" name="emailUsuario" maxlength="50" minlength="8" required placeholder=" E-mail: testedeemail@teste.com.br" value='<?php echo $email ?>' />
                </div>
            </div>
            <div id="camposForme">
                <div>
                    <label for="enderecoUsuario"></label>
                    <input type="text" id="enderecoUsuario" name="enderecoUsuario" maxlength="50" minlength="8" required placeholder=" Logradouro: Rua das flores" value='<?php echo $endereco ?>' />
                </div>
            </div>
            <div id="camposForme">
                <div>
                    <label for="enderecoNumero"></label>
                    <input type="text" id="enderecoNumero" name="enderecoNumero" maxlength="10" minlength="2" required placeholder=" Número" value='<?php echo $numero ?>' />
                </div>
                <div>
                    <label for="enderecoBairro"></label>
                    <input type="text" id="enderecoBairro" name="enderecoBairro" maxlength="20" minlength="5" required placeholder=" Bairro" value='<?php echo $bairro ?>' />
                </div>
            </div>
            <div id="camposFormeSelect">
                <div>
                    <label for="enderecoCidade"></label>
                    <select id="enderecoCidade" name="enderecoCidade">
                        <option value="vazio">-- Cidade --</option>
                        <option value="recife">Recife</option>
                        <option value="maceio">Maceió</option>
                        <option value="salvador">Salvador</option>
                        <option value="joaopessoa">João Pessoa</option>
                        <option value="fortaleza">Fortaleza</option>
                        <option value="belem">Belém</option>
                        <option value='<?php echo $cidade ?>' selected><?php echo $cidade ?></option>
                    </select>
                </div>
                <div>
                    <label for="enderecoEstado"></label>
                    <select id="enderecoEstado" name="enderecoEstado">
                        <option value="vazio">-- Estado --</option>
                        <option value="pernambuco">Pernambuco</option>
                        <option value="alagoas">Alagoas</option>
                        <option value="bahia">Bahia</option>
                        <option value="paraiba">Paraíba</option>
                        <option value="ceara">Ceará</option>
                        <option value="para">Pará</option>
                        <option value='<?php echo $estado ?>'><?php echo $estado ?></option>
                    </select>
                </div>
                <div>
                    <label for="enderecoPais"></label>
                    <select id="enderecoPais" name="enderecoPais">
                        <option value="vazio">-- País --</option>
                        <option value="brasil">Brazil</option>
                        <option value="argentina">Argentina</option>
                        <option value="bolivia">Bolívia</option>
                        <option value='<?php echo $pais ?>' selected><?php echo $pais ?></option>
                    </select>
                </div>
                <div id="camposForme">
                    <label for="enderecoCep"></label>
                    <input type="text" id="enderecoCep" name="enderecoCep" maxlength="10" minlength="9" required placeholder="CEP: xxxxx-xxx" value='<?php echo $cep ?>'/>
                </div>
            </div>
            <div id="adicionarUsuario">
                <button type="submit" id="addUsuario" name="addUsuario">Salvar</button>
            </div>
        </form>
        <footer>
            <p>&#169;Todos os direitos reservados</p>
        </footer>
    </main>
</body>

</html>