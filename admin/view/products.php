<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($data['products'] as $key => $value) { ?>
        <tr>
            <th scope="row"><?= $value['id'] ?></th>
            <td><?= $value['ten'] ?></td>
            <td><?= $value['gia'] ?></td>
            <td></td>
        </tr>
        <?php } ?>
    </tbody>
</table>