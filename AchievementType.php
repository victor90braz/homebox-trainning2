<?php

class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass(AchievementType::class))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return 'first_thousand_points.png';
    }
}
class FirstThousandPoints
{
    public function name()
    {
        return 'First Thousand Points';
    }

    public function icon()
    {
        return 'first_thousand_points.png';
    }

    public function qualifier($user)
    {

    }
}

class FirstBestAnswer
{
    public function name()
    {
        return 'First Best Answer';
    }

    public function icon()
    {
        return 'first_best_answer.png';
    }

    public function qualifier($user)
    {

    }
}

$achievement = new AchievementType();

var_dump($achievement->name());