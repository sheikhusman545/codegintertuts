<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
</head>

<body>
    <?php foreach ($array as $arr) { ?>
        <h1><?php echo $arr ?></h1>

    <?php  }
    echo $add;
    ?>
</body>

</html>