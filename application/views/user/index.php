<div class="container">
    <h1 class="bg-dark text-light p-4 m-4 text-center">Users</h1>
    <table class="table table-bordered table-striped p-4 m-4">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>Created</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <th><?php echo  $user->id ?></th>
                    <th><?php echo $user->name ?></th>
                    <th><?php echo $user->email ?></th>
                    <th><?php echo date('M d,Y H:i', strtotime($user->created_at)); ?></th>
                </tr>
            <?php endforeach  ?>
        </tbody>

    </table>
</div>


<?php


?>