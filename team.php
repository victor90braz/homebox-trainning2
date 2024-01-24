<?php

class Team {


  protected $name;
  protected $members = [];

  public function __construct($name, $members=[])
  {
    $this->name = $name;
    $this->members = $members;
  }

  public static function start(...$params) {
    return new static(...$params);
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

$team = Team::start('victor', [
  'fifa', 'libertadores', 'mercosul', 'asia'
]);

var_dump($team->members());