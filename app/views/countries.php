<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title']?></title>
</head>
<body>
    <?php foreach($data['countries'] as $countries): ?>
        <h1><?=$countries->name?></h1> id: <?=$countries->id?>
        <p><?=$countries->capitalCity?></p>
        <p><?=$countries->continet?></p>
        <p><?=$countries->population?></p>
    <?php endforeach; ?>
</body>
</html>