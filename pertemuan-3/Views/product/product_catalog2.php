<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>

    <h1><?= $brand ?></h1>
    <hr>
    <ul>
        <?php
        foreach ($product as $val) {
            echo "<li>$val</li>";
        }
        ?>
    </ul>

</body>

</html>