<?php
require_once 'assets/db.php';
require_once 'assets/functions.php';

$text=test();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>test</h1>
    <?php
    echo '<h1>'.$text.'</h1>';

?>
</body>
</html>