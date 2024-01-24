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
      return array_sum(array_map(function ($item) use ($key) {
          return $item->{$key};
      }, $this->items));
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

$collectionFilms = new Collection([
  new Video('The mask', 200),
  new Video('King Kong', 250)
]);

var_dump($collectionFilms->sum('length'));
