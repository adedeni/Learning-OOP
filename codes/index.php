<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPvideo1</title>
</head>
<body>
    <h1>this is index</h1>
    <?php
        require_once 'includes/newclass.inc.php';
        $pet = new Pet;
        echo $pet->owner();
    ?>
</body>
</html>