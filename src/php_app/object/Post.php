<?php
declare(strict_types=1);
// namespace Mstudio\Basic_php;

class Post
{
  private string $text;

  public function __construct(string $textFromNew)
  {
    if(strlen($textFromNew) <= 3){
      // echo "text too short!" .PHP_EOL;
      // exit;
      throw new Exception('Text too short!');
    }
    $this->text = $textFromNew;
  }

  public function show()
  {
    printf('%s' . PHP_EOL, $this->text);
  }

}
