<?php

// spl_autoload_register(function($class){
//   require($class . '.php');
// });

// use Mstudio\Basic_php;

require('Post.php');


try {
  $posts = [];
  $posts[0] = new Post("hello");
  $posts[1] = new Post("hi");

  foreach($posts as $post)
  {
    $post->show();
  }
}catch(Exception $e) {
  echo $e->getMessage() . PHP_EOL;
}
