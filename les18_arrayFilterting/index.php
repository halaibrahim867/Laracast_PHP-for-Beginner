<?php

class Post{

    public $title;

    public $author;

    public $published;

    public function __construct($title, $author,$published)
    {
        $this->title=$title;
        $this->author= $author;
        $this->published=$published;
    }
}

$posts= [
    new Post('My First Post','JM',true),
    new Post('My First Post','JM',true),
    new Post('My First Post','FM',true),
    new Post('My First Post','TR',false),

];


//================================
// $unpublishedPosts= array_filter($posts , function($post){
//     return $post->published ; // by default return true
   
// });

// $publishedPosts= array_filter($posts , function($post){
//     return ! $post->published; // return posts that not published 
    //return $post->published === false;

// });

// echo'<pre>';
// var_dump($unpublishedPosts);
// echo '</pre>';


// echo'<pre>';
// var_dump($publishedPosts);
// echo '</pre>';

//========================================
// $modified = array_map( function ($post) {
//     return 'foobar'; // modify on all objects and return its
// }, $posts);

// echo '<pre>';
// var_dump($modified);
// echo '</pre>';
//====================================
// $titles = array_column($posts , 'title');

// echo '<pre>';
// var_dump($titles);
// echo '</pre>';




// foreach($posts as $index => $post)
// {
//     $posts[$index] = (array) $post;  //print same array but the better use array map
// }
// echo '<pre>';
// var_dump($posts);
// echo '</pre>';  

$authors = array_column($posts , 'author', 'title');

echo '<pre>';
var_dump($authors);
echo '</pre>';  

