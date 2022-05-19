<table id="tabela" width="100%" border="1" bgcolor="gainsboro">
    <tr>
        <th>X</th>
        <th>Id</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        

    </tr>

    <?php foreach($model->rows as $item): ?>
    <tr>
    
        <td> <a href="/produto/delete?id=<?= $item['id'] ?>"> X </a>  </td>
        <td><?= $item['id'] ?></td>
        <td><a href="/produto/form?id=<?= $item['id'] ?>"> <?= $item['nome'] ?> </a></td>
        <td><?= $item['descricao'] ?></td>
        <td><?= $item['preco'] ?></td>
        
    </tr>
    <?php endforeach ?>

    <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

</table>

<style>
    table {
        border: 1 solid black;
        text-align: center;
        font-size: 25px;
    }
</style>