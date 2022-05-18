<bgcolor></bgcolor>
<table width="100%"  border="1" bgcolor="gainsboro" >
    <tr>
        <th></th>
        <th>Id</th>
        <th>Nome</th>
        <th>RG</th>
        <th>CPF</th>
        <th>Data de Nascimento</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        

    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
    <td><a href="/pessoa/delete?id=<?= $item->id ?>">X</a></td>
        <td><?= $item['id'] ?></td>
        <td><?= $item['nome'] ?></td>
        <td><?= $item['rg'] ?></td>
        <td><?= $item['cpf'] ?></td>
        <td><?= $item['data_nascimento'] ?></td>
        <td><?= $item['email'] ?></td>
        <td><?= $item['telefone'] ?></td>
        <td><?= $item['endereco'] ?></td>
        
        
        
    </tr>
    <?php endforeach ?>

</table>

<style>
    table {
        border: 1px solid black;
        text-align: center;
        font-size: 25px;
    }
</style>