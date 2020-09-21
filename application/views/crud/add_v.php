<div class="container">
  <div class="row my-4">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">Add Data</h5>
            <a href="<?= BASE_PATH; ?>/crud" class="btn btn-sm btn-primary"><<</a>
          </div>
        </div>
        <div class="card-body">
          <form action="<?= BASE_PATH; ?>/crud/insert" method="post">
            <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" name="first_name">
            </div>
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name="last_name">
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-success">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>