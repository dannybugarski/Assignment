<?php
namespace wap;

//creates the comment class
class Comment{
    protected $user;
    protected $comment;


    function __construct($user, $comment){
    $this->user = $user;
    $this->comments = [];
    }

    public function getUser(){
        return $this->user;
    }

    public function getComment(){
        return $this->comments;
    }
    
    public function add($comment){
        array_push($this->comments, $comment);
        $comment->addComment($this);
    }

    
    }




?>