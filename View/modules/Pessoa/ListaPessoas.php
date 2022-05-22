<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pessoas</title>
</head>
<body>
<h1 align="center">Listagem de Pessoas</h1>
<table id="tabela" width="100%" border="1" bgcolor="gainsboro">
    <tr>
    <th style="color:red; font-size:15px">Excluir</th>
        <th>Id</th>
        <th>Nome / Editar</th>
        <th>RG</th>
        <th>Data de Nascimento</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        
        

    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
    
    <td> <a style="color:red; text-decoration: none;" href="/pessoa/delete?id=<?= $item['id'] ?>"><b> X</b> </a>  </td>
        <td><?= $item['id'] ?></td>
        <td><a style="text-decoration: none; color:blue;" href="/pessoa/form?id=<?= $item['id'] ?>"><b> <?= $item['nome'] ?> </b></a></td>
        <td><?= $item['rg'] ?></td>
        <td><?= $item['data_nascimento'] ?></td>
        <td><?= $item['email'] ?></td>
        <td><?= $item['telefone'] ?></td>
        <td><?= $item['endereco'] ?></td>
        
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
<center><a href="/pessoa/form"><button style="height: 85px; width:350px; font-size:25px; background-color:gainsboro;border: 1 solid black;" >Adicionar mais pessoas</button></a></center>

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
