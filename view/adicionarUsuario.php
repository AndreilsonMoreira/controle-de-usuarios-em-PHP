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
        <form method="post" action="#" class="formBuscarUsuario">
            <div>
                <label for="matricula"></label>
                <input type="text" id="matricula" name="matricula" maxlength="20" minlength="8" required placeholder="Matrícula" />
            </div>
            <div>
                <label for="nomeUsuario"></label>
                <input type="text" id="nomeUsuario" name="nomeUsuario" maxlength="50" minlength="8" required placeholder="Nome completo do novo usuário" />
            </div>
            <div>
                <label for="telefoneUsuario"></label>
                <input type="text" id="telefoneUsuario" name="telefoneUsuario" maxlength="13" minlength="11" required placeholder="Ex. (xx)xxxxx-xxxx" />
            </div>
            <div>
                <label for="emailUsuario"></label>
                <input type="text" id="emailUsuario" name="emailUsuario" maxlength="50" minlength="8" required placeholder="Ex. testedeemail@teste.com.br" />
            </div>
            <div>
                <label for="enderecoUsuario"></label>
                <input type="text" id="enderecoUsuario" name="enderecoUsuario" maxlength="50" minlength="8" required placeholder="Ex. Rua das flores" />
            </div>
            <div>
                <label for="enderecoNumero"></label>
                <input type="text" id="enderecoNumero" name="enderecoNumero" maxlength="10" minlength="2" required placeholder="00" />
            </div>
            <div>
                <label for="enderecoBairro"></label>
                <input type="text" id="enderecoBairro" name="enderecoBairro" maxlength="20" minlength="5" required placeholder="Centro" />
            </div>
            <div>
                <label for="enderecoCidade"></label>
                <select id="enderecoCidade" name="enderecoCidade">
                    <option value="vazio">-- selecione --</option>
                    <option value="recife">Recife</option>
                    <option value="maceio">Maceió</option>
                    <option value="salvador">Salvador</option>
                    <option value="joaopessoa">João Pessoa</option>
                    <option value="fortaleza">Fortaleza</option>
                    <option value="belem">Belém</option>
                </select>
            </div>
            <div>
                <label for="enderecoEstado"></label>
                <select id="enderecoEstado" name="enderecoEstado">
                    <option value="vazio">-- selecione --</option>
                    <option value="pernambuco">Pernambuco</option>
                    <option value="alagoas">Alagoas</option>
                    <option value="bahia">Bahia</option>
                    <option value="paraiba">Paraíba</option>
                    <option value="ceara">Ceará</option>
                    <option value="para">Pará</option>
                </select>
            </div>
            <div>
                <label for="enderecoPais"></label>
                <select id="enderecoPais" name="enderecoPais">
                    <option value="vazio">-- selecione --</option>
                    <option value="brasil">Brazil</option>
                    <option value="argentina">Argentina</option>
                    <option value="bolivia">Bolívia</option>
                </select>
            </div>
            <div>
                <label for="enderecoCep"></label>
                <input type="text" id="enderecoCep" name="enderecoCep" maxlength="10" minlength="9" required placeholder="xxxxx-xxx" />
            </div>
            <div>
                <input type="submit" id="addUsuario" name="addUsuario" value="Salvar" />
            </div>
        </form>
        <footer>
            <p>&#169;Todos os direitos reservados</p>
        </footer>
    </main>
</body>

</html>