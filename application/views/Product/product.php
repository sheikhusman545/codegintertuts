<div class="container">
    <h1 class="bg-dark text-light p-4 m-4 text-center">Users</h1>
    <table class="table table-bordered table-striped p-4 m-4">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>description</th>
                <th>price</th>
                <th>image</th>
                <th>sale_price</th>
                <th>category_id</th>
                <th>created_at</th>

                <th>Action</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <th><?php echo  $product->id ?></th>
                    <th><?php echo $product->name ?></th>
                    <th><?php echo $product->description ?></th>
                    <th><?php echo $product->price ?></th>
                    <th><?php echo $product->image ?></th>
                    <th><?php echo $product->sale_price ?></th>
                    <th><?php echo $product->category_id ?></th>
                    <th><?php echo date('M d,Y H:i', strtotime($product->created_at)); ?></th>

                    <th>
                        <a href="<?php echo base_url('product/delete/') . $product->id ?>"><i class="fa-solid fa-trash text-danger"></i></a>
                        <a href="<?php echo base_url('product/edit/') . $product->id ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                    </th>
                    
                </tr>
            <?php endforeach  ?>
        </tbody>

    </table>
</div>
