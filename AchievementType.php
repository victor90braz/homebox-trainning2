<?php

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name(). '.png'));
    }
    abstract function qualifier($user);

}
class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {

    }
}

class FirstBestAnswer extends AchievementType
{
    public function qualifier($user)
    {

    }
}

class ReachTop50 extends AchievementType {
    public function qualifier($user)
    {
        return $user;
    }
}

$achievement = new ReachTop50();

var_dump($achievement->qualifier('user'));
