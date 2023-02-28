<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Blog Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="blog/store.php" method="post" enctype = "multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control"  placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control"  placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control"  placeholder="Enter Image link">
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input type="text" name="video" class="form-control" placeholder="Enter Video link">
                        </div>
                        <div class="form-group">
                            <label for="cat_id">Category</label>
                            <input type="number" name="cat_id" class="form-control"  placeholder="Category">
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
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>