<?php
    include 'classes/postSeeder.php';
    
    $posts = wap\PostSeeder::seed();
    $posts[0]->addComment("User1", "Msg1");
    $posts[0]->addComment("User2", "Msg2");
    $posts[1]->addComment("User3", "Msg3");
    //var_dump($posts);
    //exit;
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
                    <?= $post->getUser() ?>
                    <?= $post->getMessage() ?> <br>
                    <?= $post->getImage() ?> <br>
                    <?= $post->getDate() ?> <br>
                    <br>
                    <b>Comments: </b> <br>
                    <?php $comments = $post->getComment();
                    foreach($comments as $comment) { ?>
                        <?= $comment["user"] ?> said <?= $comment["comment"] ?> <br>
                    <?php } ?>
            </div>
            <?php } ?>
        </div>
    </body>
</html>