<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="d-flex justify-content-between my-3">
        <h3>Example implementation of CRUD</h3>
        <a href="<?= BASE_PATH; ?>/crud/add" class="btn  btn-primary">Add Data</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <table class="table table-striped table-hover table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col" class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($data as $key => $value) : ?>
          <tr>
            <th><?= $no++; ?></th>
            <td><?= ucfirst($value['first_name']); ?></td>
            <td><?= ucfirst($value['last_name']); ?></td>
            <td class="text-center">
              <a href="<?= BASE_PATH; ?>/crud/edit/<?= $value['crud_id']; ?>" class="btn btn-sm btn-success">Edit</a>
              <a href="<?= BASE_PATH; ?>/crud/delete/<?= $value['crud_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>