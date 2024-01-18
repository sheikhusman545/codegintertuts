<div class="container">
  <div class="col-8 mx-auto my-5">
    <h1 class="text-center">Create User</h1>
    <div class="text text-danger"><?php echo validation_errors() ?></div>

    <form action="<?php echo base_url('User/save') ?>" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo set_value('name') ?>" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" autocomplete="off" name="email" value="<?php echo set_value('email') ?>" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" autocomplete="off" id="password" name="password" required>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
</div>