<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
<form action="/categoria/save" method="post">
        <fieldset>
            <legend style="color: white;">Cadastro de Categoria</legend>
            
            <input type="hidden" value="<?= $model->id ?>" name="id" />


            <label for="descricao" style="color: white;">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>" style="background:#484d50; color:white; height:20px;"/>

            <br>
            <button type="submit" style="background-color:#484d50 ; height:40px; width:70px; font-size:17px;color:white">Enviar</button>

        </fieldset>
    </form>    
    <br>
    <center><a href="/categoria"><button style="height: 85px; width:350px; font-size:25px; background-color:#484d50;border: 1 solid black;color:white" >Ver listagem de categorias</button></a></center>

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