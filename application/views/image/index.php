<form action="<?php echo base_url('Image/saveImage') ?>" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="userfile" class="form-label">Choose Image:</label>
        <input type="file" class="form-control" id="userfile" name="file">
    </div>

    <button type="submit" class="btn btn-primary">Upload Image</button>

</form>