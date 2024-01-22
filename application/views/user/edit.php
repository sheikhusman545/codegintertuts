<div class="container">
    <div class="col-8 mx-auto my-5">
        <h1 class="text-center">Update User</h1>
        <div class="text text-danger"><?php echo validation_errors() ?></div>

        <form action="<?php echo base_url('User/update') ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $user->name ?>" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" autocomplete="off" name="email" value="<?php echo $user->email  ?>" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" autocomplete="off" id="password" name="password" value="<?php echo $user->email  ?>" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $user->id ?>">

            <button type="submit" class="btn btn-success">Update</button>
        </form>

    </div>
</div>