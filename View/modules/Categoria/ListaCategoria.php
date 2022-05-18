<table id="tabela" width="100%" border="1" bgcolor="gainsboro">
    <tr>
        <th>Id</th>
        <th>Descrição</th>

        

    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
        <td><?= $item['id'] ?></td>
        <td><?= $item['descricao'] ?></td>
        
    </tr>
    <?php endforeach ?>

</table>

<style>
    table {
        border: 1 solid black;
        text-align: center;
        font-size: 25px;
    }
</style>