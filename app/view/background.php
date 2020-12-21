<?php
include_once '../controllers/php.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Background</title>
</head>

<style>
    body {
        background: url("<?php print $bg; ?>");
    }
</style>

<body>
    <nav class="nav">
        <?php foreach ($array['nav'] as $value) : ?>
            <a href="<?php print $value['link'] ?>"><?php print $value['name'] ?></a>
        <?php endforeach; ?>
    </nav>
</body>

</html>