<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Pessoas</title>
</head>
<body>
<h1 align="center" style="color:white;">Listagem de Pessoas</h1>
<table id="tabela" width="100%" border="1" bgcolor="gainsboro">
    <tr>
    <th style="color:white; font-size:15px">Excluir</th>
        <th style="color:white">Id</th>
        <th style="color:white">Nome / Editar</th>
        <th style="color:white">RG</th>
        <th style="color:white">Data de Nascimento</th>
        <th style="color:white">Email</th>
        <th style="color:white">Telefone</th>
        <th style="color:white">Endereço</th>
        
        

    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
    
    <td> <a style="color:red; text-decoration: none;" href="/pessoa/delete?id=<?= $item['id'] ?>"><b> X</b> </a>  </td>
        <td style="color:white"><?= $item['id'] ?></td>
        <td><a style="text-decoration: none; color:aqua;" href="/pessoa/form?id=<?= $item['id'] ?>"><b> <?= $item['nome'] ?> </b></a></td>
        <td style="color:white"><?= $item['rg'] ?></td>
        <td style="color:white"><?= $item['data_nascimento'] ?></td>
        <td style="color:white"><?= $item['email'] ?></td>
        <td style="color:white"><?= $item['telefone'] ?></td>
        <td style="color:white"><?= $item['endereco'] ?></td>
        
    </tr>
    <?php endforeach ?>

    

    <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="10"><b style="font-size: 30px; color:white">Nenhum registro encontrado.</b></td>
            </tr>
        <?php endif ?>

</table>

<br>
<br>
<center><a href="/pessoa/form"><button style="height: 85px; width:350px; font-size:25px; background-color:#484d50;border: 1 solid black;color:white" >Adicionar mais pessoas</button></a></center>

<a href="/"><button style="height: 85px; width:350px; font-size:25px; background-color:#484d50;border: 1 solid black; position: absolute;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;color:white" >Voltar para página inicial</button></a>

<style>
    table {
        border: 1 solid black;
        text-align: center;
        font-size: 25px;
        text-align: center;
        background-color: #484d50;
        
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
        background-color: #2e2e2e;
    }
</style>
</body>
</html>
