<?php

//array of posts
    $posts = array();
    $posts [] = array(
        'name' => "Danny",
        'message' => 'hello',
        'image' => 'images/cl.png',
        'date' => '10/04/1998',
    );

    $posts [] = array(
        'name' => "Chris",
        'message' => 'hey',
        'image' => 'images/seel.png',
        'date' => '10/05/1998',
    );

    $posts [] = array(
        'name' => "John",
        'message' => 'yeet',
        'image' => 'images/cl.png',
        'date' => '10/06/1998',
    );

    // var_dump($posts);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>title</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>  
        <div id = "content">
            <h1> Social Media </h1>  
            <?php foreach($posts as $post) { ?>
                <div id = "post">
                    <?= $post['name'] ?>
                    <?= $post['message'] ?> <br>
                    <img src ="<?= $post['image'] ?>" width = "300" height = "100" alt ="user image">
                    <?= $post['date'] ?> <br>
            </div>
            <?php } ?>
        </div>
    </body>
</html>