<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3 class="mt-3">List Of Peoples</h3>

            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peoples as $people) : ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td><?= $people['name']; ?></td>
                            <td><?= $people['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-warning">detail</a>
                                <a href="" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>
