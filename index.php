<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <!-- PHP CONDITIONS -->
    <?php 
    $names = [
        "Luca",
        "Paolo",
        "Marco"
    ];


    $condition = true;


    if($condition){
        $message = "Hai ragione";
    } else {
        $message = "No!";
    };
    ?>

    <h1>
        <?= $message ?>
    </h1>

    <!-- PHP Array & foreach -->
     <ol>
        <?php foreach ($names as $name) : ?>
        <li><?= $name ?></li>
        <?php endforeach ?>
     </ol>

</body>
</html>