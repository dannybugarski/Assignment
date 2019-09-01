<?php
namespace wap;


include 'classes/post.php';
include 'classes/comment.php';

include 'classes/postSeeder.php';

//array of comments
$comments = [
    new Comment("person1", "hey1"),
    new Comment("person2", "hey2"),
    new Comment("person3", "hey3"),
    ];

    var_dump($comments);
    exit;
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