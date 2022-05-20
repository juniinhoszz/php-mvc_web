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
        <th>X</th>
        <th>Id</th>
        <th>Nome</th>
        <th>RG</th>
        <th>Data de Nascimento</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        
        

    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
    
        <td> <a href="/pessoa/delete?id=<?= $item['id'] ?>"> X </a>  </td>
        <td><?= $item['id'] ?></td>
        <td><a href="/pessoa/form?id=<?= $item['id'] ?>"> <?= $item['nome'] ?> </a></td>
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
<center><a style="font-size: 25px; text-decoration: none;" href="/pessoa/form">Adicionar mais produtos</a>

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
    }
</style>
</body>
</html>
