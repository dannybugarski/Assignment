<?php
namespace wap;
use wap\Post;
include 'post.php';


class PostSeeder{
    public static function seed(){
        $posts = [];
        $posts[] = new Post("<b> Danny Bugarski: </b>", "This is my first message!", '<img src=https://i.imgur.com/t1FlTYd.jpg=" width=160 height=120 alt="Image">', "Date: 21/07/2019");
        $posts[] = new Post("<b> Danny Bugarski: </b>", "hello", '<img src=https://i.imgur.com/n97pOoj.jpg=" width=160 height=120 alt="Image">', "Date: 20/07/2019");
        $posts[] = new Post("<b> Danny Bugarski: </b>", "hey", '<img src=https://i.imgur.com/I6QQe0j.jpg=" width=160 height=120 alt="Image">', "Date: 20/07/2019");
        return $posts;
    }
}
?>