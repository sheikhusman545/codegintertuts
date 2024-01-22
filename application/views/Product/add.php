<div class="container">
  <div class="col-8 mx-auto my-5">
    <h1 class="bg-dark text-light p-4 m-4 text-center">Add Products</h1>
    <div class="text text-danger"><?php  echo validation_errors() ?></div>
    <div class="text text-danger"><?php  echo (isset($error) ? $error : '') ?></div>

    <form action="<?php echo base_url('Product/save') ?>" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name') ?>" required>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" id="description" autocomplete="off" name="description" value="<?php echo set_value('description') ?>" required>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" autocomplete="off" id="price" name="price" required>
      </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="userfile" name="file">
      </div>

      <div class="mb-3">
        <label for="sale_price" class="form-label">Sale_Price</label>
        <input type="text" class="form-control" autocomplete="off" id="sale_price" name="sale_price" required>
      </div>

      <!-- <div class="mb-3">
        <label for="category_id" class="form-label">Category_id</label>
        <input type="text" class="form-control" autocomplete="off" id="category_id" name="category_id" required>
      </div> -->

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</div>