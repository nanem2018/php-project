

<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Название товара</th>
        <th>Описание</th>
        <th>Цена</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($goods as $item): ?>
        <tr>
            <th scope="row"><?= $item['good_id'] ?></th>
            <td>
                <?php if ($item['is_active'] == 0): ?>
                    <s><?= $item['good_name'] ?></s>
                <?php else: ?>
                    <?= $item['good_name'] ?>
                <?php endif; ?>
            </td>
            <td><?= $item['good_description'] ?></td>
            <td><?= $item['good_price'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>