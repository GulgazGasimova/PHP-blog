<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Pages</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=pages/create" class="btn btn-primary float-right">
                                            Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Content</th>
                                    <th>Is Menu</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = mysqli_query($db, "SELECT * FROM  pages");
                                $pages = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                foreach ($pages as $p) {
                                    ?>
                                    <tr>
                                        <td><?= $p['title'] ?></td>
                                        <td><?= $p['description'] ?></td>
                                        <td><?= $p['content'] ?></td>
                                        <td><?= $p['is_menu'] ?></td>
                                        <td><?= $p['status'] ?></td>
                                        <td><?= $p['created_at'] ?></td>
                                        <td style="display:flex;column-gap:5px;">
                                            <a href="index.php?route=pages/edit&id=<?= $p['id'] ?>" title="Edit"
                                               class="btn btn-sm btn-primary pull-right">
                                                <i class="voyager-paper-plane">Edit</i>
                                            </a>
                                            <a href="index.php?route=pages/delete&id=<?= $p['id'] ?>"
                                               title="Delete"
                                               class="btn btn-sm btn-danger pull-right">
                                                <i class="voyager-paper-plane">Delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
</div>
