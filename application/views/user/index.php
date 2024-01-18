<div class="container">
    <h1 class="bg-dark text-light p-4 m-4 text-center">Users</h1>
    <a href="<?php echo base_url('User/create') ?>" class="btn btn-primary  m-4  ">Add User</a>
    <table class="table table-bordered table-striped p-4 m-4">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th><?php echo  $user->id ?></th>
                    <th><?php echo $user->name ?></th>
                    <th><?php echo $user->email ?></th>
                    <th><?php echo date('M d,Y H:i', strtotime($user->created_at)); ?></th>
                    <th>
                        <a href="<?php echo base_url('user/delete/') . $user->id ?>"><i class="fa-solid fa-trash text-danger"></i></a>
                        <a href="<?php echo base_url('user/edit/') . $user->id ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                    </th>
                </tr>
            <?php endforeach  ?>
        </tbody>

    </table>
</div>


<?php


?>