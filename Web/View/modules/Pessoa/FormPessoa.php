<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
    <form action="/pessoa/save" method="post">
        <fieldset>
            <legend style="color: white;">Cadastro de Pessoa</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome" style="color: white;">Nome:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" style="background:#484d50; color:white; height:20px;"/>

            <label for="rg" style="color: white;">RG:</label>
            <input name="rg" id="rg" type="number" value="<?= $model->rg ?>" style="background:#484d50; color:white; height:20px;"/>

            <label for="cpf" style="color: white;">CPF:</label>
            <input name="cpf" id="cpf" type="number" value="<?= $model->cpf ?>" style="background:#484d50; color:white; height:20px;"/>

            <label for="data_nascimento" style="color: white;">Data Nascimento:</label>
            <input name="data_nascimento" id="data_nascimento" type="date" value="<?= $model->data_nascimento ?>" style="background:#484d50; color:white; height:20px;"/>

            <label for="email" style="color: white;">E-mail:</label>
            <input name="email" id="email" type="email" value="<?= $model->email ?>" style="background:#484d50; color:white; height:20px;"/>

            <label for="telefone" style="color: white;">Telefone:</label>
            <input name="telefone" id="telefone" type="tel" value="<?= $model->telefone ?>" style="background:#484d50; color:white; height:20px;"/>

            <label for="endereco" style="color: white;">Endereço:</label>
            <input name="endereco" id="endereco" type="text" value="<?= $model->endereco ?>" style="background:#484d50; color:white; height:20px;"/>
            <br>
            <button type="submit" style="background-color:#484d50 ; height:35px; width:65px; font-size:17px;color:white">Enviar</button>

        </fieldset>
    </form>    
    <br>
    <center><a href="/pessoa"><button style="height: 85px; width:350px; font-size:25px; background-color:#484d50;border: 1 solid black;color:white" >Ver listagem de pessoas</button></a></center>

    <a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:#484d50;border: 1 solid black; position: absolute;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;color:white" >Voltar para página inicial</button></a>

<style>
        body{
            background-color: #2e2e2e;
        }
    </style>

</body>
</html>