<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blog</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=blog/create" class="btn btn-primary float-right">
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
                                    <th>Image</th>
                                    <th>Video</th>
                                    <th>Category</th>
                                    <th>Created at</th>
                                    <th>Content</th>
                                    <th>Is Monset</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = mysqli_query($db, "SELECT * FROM  blog");
                                $blog = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                foreach ($blog as $b) {
                                    ?>
                                    <tr>
                                        <td><?= $b['title'] ?></td>
                                        <td><?= $b['description'] ?></td>
                                        <td><img src="../uploads/<?= $b['image'] ?>" width="100" height="100"></td>
                                        <td><iframe width="100" height="100" src="<?= $b['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" ></iframe></td>
                                        <td><?= $b['cat_id'] ?></td>
                                        <td><?= $b['created_at'] ?></td>
                                        <td><?= $b['content'] ?></td>
                                        <td><?= $b['is_monset'] ?></td>
                                        <td><?= $b['status'] ?></td>
                                        <td style="display:flex;column-gap:5px;">
                                            <a href="index.php?route=blog/edit&id=<?= $b['id'] ?>" title="Edit"
                                               class="btn btn-sm btn-primary pull-right">
                                                <i class="voyager-paper-plane">Edit</i>
                                            </a>
                                            <a href="index.php?route=blog/delete&id=<?= $b['id'] ?>"
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
