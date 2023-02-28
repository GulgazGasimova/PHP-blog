<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Settings Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="settings/store.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="_key">Key</label>
                            <input type="text" name="_key" class="form-control"  placeholder="Enter Key">
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="text" name="value" class="form-control"  placeholder="Enter Value">
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