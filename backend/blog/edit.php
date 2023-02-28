<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Blog Edit</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $id = $_GET['id'];
                $query = mysqli_query($db, "SELECT * FROM  blog where id=$id");
                while ($row = mysqli_fetch_array($query)) {

                ?>
                <form action="blog/update.php?id=<?= $id ?>" method="post" enctype = "multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $row['title'] ?>"
                                   placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" value="<?= $row['description'] ?>"
                                   placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" value="<?= $row['image'] ?>"
                                   placeholder="Enter Image Link">
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input type="text" name="video" class="form-control" value="<?= $row['video'] ?>"
                                   placeholder="Enter Video Link">
                        </div>
                        <div class="form-group">
                            <label for="cat_id">Category</label>
                            <input type="number" name="cat_id" class="form-control" value="<?= $row['cat_id'] ?>"
                                   placeholder="Category">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="is_monset">Is Monset</label>
                            <div class="form-check">
                            <label>Yes</label>
                            <input type="radio" name="is_monset" value="1">
                        </div>
                        <div class="form-check">
                            <label>No</label>
                            <input type="radio" name="is_monset" value="0">
                        </div>
                        <?php
                        if ($row['is_monset'] == 1) {
                            $yes = 'selected';
                            $no = '';
                        }else {
                            $yes = '';
                            $no = 'selected';
                        }
                        ?>
                            <option value="0" <?= $no ?> >No</option>
                            <option value="1" <?= $yes ?> >Yes</option> 
                        <div class="form-group">
                            <label for="status">Status</label>
                            <div class="form-check">
                            <label>Active</label>
                            <input type="radio" name="status" value="1">
                        </div>
                        <div class="form-check">
                            <label>Passive</label>
                            <input type="radio" name="status" value="0">
                        </div>
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