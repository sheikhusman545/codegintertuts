<div class="container">
    <h1 class="bg-dark text-light p-4 m-4 text-center">Products</h1>
    <a href="<?php echo base_url('product/add') ?>" class="btn btn-primary  m-4  ">Add Products</a>
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
                    <th>
                        <?php 
                        if (!empty($product->image)) { ?>
                            <a href="<?php echo base_url('upload/' . $product->image)    ?>" target="_blank"><img src="<?php echo base_url('upload/' . $product->image)    ?>" width="64px" alt="<?php echo $product->name ?>"> </a>
                        <?php } else { ?>
                            <a href="<?php echo base_url('upload/assets/no-image.svg')?>" target="_blank"><img src="<?php echo base_url('upload/assets/no-image.svg') ?>" width=" 64px" alt="<?php echo $product->name ?>"> </a>

                        <?php } ?>

                    </th>
                    <th><?php echo $product->sale_price ?></th>
                    <th><?php echo $product->category_id ?></th>
                    <th><?php echo date('M d,Y h:i A', strtotime($product->created_at)); ?></th>

                    <th>
                        <a onclick="return confirm('Are you sure you want to delete this item?');" href="<?php echo base_url('product/delete/') . $product->id ?>"><i class="fa-solid fa-trash text-danger"></i></a>
                        <a href="<?php echo base_url('product/edit/') . $product->id ?>"><i class="fa-regular fa-pen-to-square"></i></a>
                    </th>

                </tr>
            <?php endforeach  ?>
        </tbody>

    </table>
</div>