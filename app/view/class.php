<?php
include_once '../controllers/php.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Class</title>
</head>

<body>
    <nav class="nav">
        <?php foreach ($array['nav'] as $value) : ?>
            <a href="<?php print $value['link'] ?>"><?php print $value['name'] ?></a>
        <?php endforeach; ?>
    </nav>

    <div class="page_container">
        <table>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Age</th>
                <th>Email</th>
            </tr>
            <?php foreach ($array['users'] as $value) : ?>
                <tr>
                    <td><?php print $value[0]; ?></td>
                    <td><?php print $value[1]; ?></td>
                    <td><?php print $value[2]; ?></td>
                    <td><?php print $value[3]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>

</html>