<?php

class Encapsulation {

  public $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  private function privateThings() {
    return 'i know what you did last summer';
  }
}

$bob = new Encapsulation('bob');
var_dump($bob);
$bob->name = 'victor';
var_dump($bob);