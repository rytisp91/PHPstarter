<?php
include_once "../controllers/php.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Home</title>
</head>

<body>
    <nav class="nav">
        <?php foreach ($array['nav'] as $value) : ?>
            <a href="<?php print $value['link'] ?>"><?php print $value['name'] ?></a>
        <?php endforeach; ?>
    </nav>
    <div class="page_container">
        <form method="post">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="surname">Surname:</label><br>
            <input type="text" id="surname" name="surname"><br>
            <label for="age">Age:</label><br>
            <input type="text" id="age" name="age"><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="number">Number:</label><br>
            <input type="text" id="number" name="number"><br>
            <input type="submit" value="Submit">
        </form>
        <img src="<?php print $array['funnyPics'][rand(0, 3)]; ?>" alt="" width="300px">
    </div>
</body>

</html>