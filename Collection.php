<?php

class Collection
{
  protected array $items;

  public function __construct($items)
  {
    $this->items = $items;
  }

  public function sum($key)
  {
      return array_sum(array_column($this->items,$key));
  }

  public function lenght() {
    return $this->sum('length');
  }
}

class VideosCollection extends Collection {

  public function length()
  {
    return $this->sum('length');
  }
}

class Video
{
  public $title;
  public $length;

  public function __construct($title, $length)
  {
    $this->title = $title;
    $this->length = $length;
  }
}

$videos = new VideosCollection([
  new Video('The mask', 5000),
  new Video('King Kong', 250)
]);

var_dump($videos->lenght());
