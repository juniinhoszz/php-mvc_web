
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
    <form action="/produto/save" method="post">
        <fieldset>
            <legend>Cadastro de Produto</legend>
            
            
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input name="nome" id="nome" type="text" value="<?= $model->nome ?>" />

            <label for="descricao">Descrição:</label>
            <input name="descricao" id="descricao" type="text" value="<?= $model->descricao ?>"/>

            <label for="preco">Preço:</label>
            <input name="preco" id="preco" type="is_double" value="<?= $model->preco ?>"/>

            <br>
            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
<br>
    <center><a href="/produto"><button style="height: 85px; width:350px; font-size:25px; background-color:gainsboro;border: 1 solid black;" >Ver listagem de produtos</button></a></center>
    

<a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:gainsboro;border: 1 solid black; position: absolute;
    bottom: 0;
    background-color: gainsboro;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;" >Voltar para página inicial</button></a>

</body>
</html>