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
            <legend>Cadastro de Categoria</legend>
            
            <input type="hidden" value="<?= $model->id ?>" name="id" />


            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>"/>

            <br>
            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
    <br>
    <center><a href="/categoria"><button style="height: 85px; width:350px; font-size:25px; background-color:gainsboro;border: 1 solid black;" >Ver listagem de categorias</button></a></center>
</body>
</html>