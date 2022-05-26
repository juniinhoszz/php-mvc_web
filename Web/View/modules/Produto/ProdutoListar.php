<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>
</head>
<body>

<h1 align="center" >Listagem de Produto</h1>
<table id="tabela" width="100%" border="1" bgcolor="gainsboro">
    <tr>
        <th style="color:red; font-size:15px">Excluir</th>
        <th>Id</th>
        <th>Nome / Editar</th>
        <th>Descrição</th>
        <th>Preço</th>
        

    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
    
        <td> <a style="color:red; text-decoration: none;" href="/produto/delete?id=<?= $item['id'] ?>"><b> X</b> </a>  </td>
        <td><?= $item['id'] ?></td>
        <td><a style="text-decoration: none; color:blue;" href="/produto/form?id=<?= $item['id'] ?>"><b> <?= $item['nome'] ?> </b></a></td>
        <td><?= $item['descricao'] ?></td>
        <td><?= $item['preco'] ?></td>
        
    </tr>
    <?php endforeach ?>

    

    <?php if(count($model->rows) == 0): ?>
            <tr>
            <td colspan="10"><b style="font-size: 30px;">Nenhum registro encontrado.</b></td>
            </tr>
        <?php endif ?>

</table>

<br>
<br>
<center><a href="/produto/form"><button style="height: 85px; width:350px; font-size:25px; background-color:gainsboro;border: 1 solid black;" >Adicionar mais produtos</button></a></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:gainsboro;border: 1 solid black; position: absolute;
    bottom: 0;
    background-color: gainsboro;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;" >Voltar para página inicial</button></a>

<style>
    table {
        border: 1 solid black;
        text-align: center;
        font-size: 25px;
        text-align: center;
        
        
        
        
        
    }
    h1{
        font-size: 35;
    }
    body{
        font-family: Arial, Helvetica, sans-serif;
        background-image: url('');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        
    }
</style>
</body>
</html>