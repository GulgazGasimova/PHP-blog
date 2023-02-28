<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Settings Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $id = $_GET['id'];
                $query = mysqli_query($db, "SELECT * FROM  settings where id=$id");
                while ($row = mysqli_fetch_array($query)) {

                ?>
                <form action="settings/update.php?id=<?= $id ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="_key">Key</label>
                            <input type="text" name="_key" class="form-control" value="<?= $row['_key'] ?>"
                                   placeholder="Enter Key">
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="text" name="value" class="form-control" value="<?= $row['value'] ?>"
                                   placeholder="Enter Value">
                        </div>
                        <div class="form-group">
                            <label for="password">Status</label>
                            <select name="status" class="form-control">
                                <?php
                                if ($row['status'] == 1) {
                                    $active = 'selected';
                                    $passive = '';
                                } else {
                                    $active = '';
                                    $passive = 'selected';
                                }
                                ?>
                                <option value="0" <?= $passive ?> >Passive</option>
                                <option value="1" <?= $active ?> >Active</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <?php } ?>
                </form>
            </div>

        </div>
    </section>
</div>