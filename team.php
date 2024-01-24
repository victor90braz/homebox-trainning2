<?php

class Team {


  protected $name;
  protected $members = [];

  public function __construct($name, $members=[])
  {
    $this->name = $name;
    $this->members = $members;
  }

  public static function start(...$params) { // ...$params to get all parameters from constructor
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

class Member {
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function lastViewed()
  {

  }
}

$bootcamp = Team::start('ISDI CODERS', [
  new Member('John Doe'),
  new Member('Luis Garcia')
]);

var_dump($bootcamp->name());
var_dump($bootcamp->members());