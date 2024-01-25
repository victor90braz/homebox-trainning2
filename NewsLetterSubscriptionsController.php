<?php

interface Newsletter
{
    public function subscribe($email);
}
class NewsLetterSubscriptionsController
{
    public function store(Newsletter $newsletter)
    {
        $email = 'majorel@gmail.com';
        return $newsletter->subscribe($email);
    }
}

class CampaignMonitor  implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with CampaignMonitor');

    }
}

class Drip  implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with Drip');
    }
}

class Majorel  implements Newsletter
{
    public function subscribe($email)
    {
        die('subscribing with Majorel');
    }
}

$newsletter = new NewsLetterSubscriptionsController();

var_dump($newsletter->store(new Drip()));