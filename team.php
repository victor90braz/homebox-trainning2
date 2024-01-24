<?php

class Team {


  protected $name;
  protected $members = [];

  public function __construct($name, $members)
  {
    $this->name = $name;
    $this->members = $members;
  }

  public function name() {
    return $this->name;
  }

  public function add($name) {
    return $members[] = $name;
  }

  public function members() {
    return $this->members;
  }
}

$team = new Team('victor', [
  'fifa', 'libertadores', 'mercosul'
]);

var_dump($team->members());