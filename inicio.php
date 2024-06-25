<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio PHP</title>
</head>
<style>
    body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        }
        .container {
            width: 80%;
            margin: 40px auto;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0,0,0,0);
            }
            form{
                display: flex;
                flex-direction: column;
                width: 60%;
                margin: 40px auto;
            }
            input{
            border: none;
            border-bottom: 2px solid;
            padding: 2%;
            }
           .bt{
            background-color: purple;
            color: white;
            border: none;
             margin-top: 20px;
            padding: 10px 20px;
            border-radius: 20px;
           } 
            


</style>
<body> 
    <div class="container">
    <form action="teste.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <label for="nome de usuario">Nome de usuario:</label>
        <input type="text" id="nomeDeUsuario" name="nomeDeUsuario">
        <label for="E-mail">Email:</label>
        <input type="email" id="email" name="email">
        <label for="CPF">CPF:</label>
        <input type="number" id="cpf" name="cpf">
        <label for="Data_de_Nascimento">Data de Nascimento:</label>
        <input type="data" id="Data_de_Nascimento" name="Data_de_Nascimento">
        <label for="Endereço">Endereço:</label>
        <input type="Endereço" id="Endereço" name="Endereço">
        Sexo: <input list="browsers" name="sexo">
        <datalist id="browsers">
            <option value="Masculino">
                <option value="Feminino">
                    </datalist><br><br>
        <input type="submit" value="Enviar" class="bt">
    </form>  
    </div> 
</body>
</html>