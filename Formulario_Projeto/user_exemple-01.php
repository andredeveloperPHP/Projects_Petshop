<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Methods</title>
</head>
<body>
<form action="user_exemple-02.php" method="POST" enctype="">

<div class="form-group">

    <label> Nome </label>
    <input type="text"  name="nome" class="form-control"><br>
    <br><br>
    <!----------------------------------------------------------->
    <label>Sobrenome</label>
    <input type="text" name="sobrenome" class="form-control"><br>
    <br><br>
    <!----------------------------------------------------------->
    <label>Registro Geral</label>
    <input type="text" name="rg" class="form-control"><br>
    <br><br>

    <label>Cadastro Pessoa Fisica</label>
    <input type="text" name="cpf" class="form-control"><br>
    <br><br>
    <!----------------------------------------------------------->
    <label>Password</label>
    <input type="password" name="senha" class="form-control"><br>
    <br><br>
    <!----------------------------------------------------------->
<label>Quant. Cadastrados?</label>
    <input type="text" name="users" class="form-control"><br>
    <br><br>
    <!----------------------------------------------------------->
    <button style=' color:yellow; background-color:green; font-size:16px; cursor:pointer; font-weight:bold; text-align:center;'type="submit" alt="Sending Data"> Enviar Dados </button>
    <button style=' color:yellow; background-color:Red; font-size:16px; cursor:pointer; font-weight:bold; text-align:center;'type="reset" alt="Clear Box"> Limpar Registros </button>
    <br>
    <!----------------------------------------------------------->
</div>
</form>
</body>
</html>

