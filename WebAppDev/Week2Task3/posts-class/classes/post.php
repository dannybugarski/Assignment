<?php
namespace wap;

use wap\Comment;
// require 'comment.php';

//Creates Post class, with along with it's objects
class Post{
    protected $user;
    protected $message;
    protected $comments;
    protected $image;
    protected $date;

    function __construct($user, $message, $image, $date){
        $this->user = $user;
        $this->message = $message;
        $this->image = $image;
        $this->date = $date;
        $this->comments = [];
    }

    function getUser(){
        return $this->user;
    }

    public function getMessage(){
        return $this->message;
    }

    public function getImage(){
        return $this->image;
    }

    public function getDate(){
        return $this->date;
    }

    public function getComment(){
        return $this->comments;
    }

    public function addComment($comment){
        array_push($this->comments, $comment);
    }


}
?>