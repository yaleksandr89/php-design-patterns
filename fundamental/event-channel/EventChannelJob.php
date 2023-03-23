<?php

namespace Fundamental\EventChannel;

use Fundamental\EventChannel\Classes\EventChannel;
use Fundamental\EventChannel\Classes\Publisher;
use Fundamental\EventChannel\Classes\Subscriber;

class EventChannelJob
{
    private string $name = 'Канал событий';

    public function run(): void
    {
        $newsChannel = new EventChannel();

        // Группы ("поставщик/издатель и т.д.")
        $highgardenGroup = new Publisher('highgarden-news', $newsChannel);
        $winterfellNews = new Publisher('winterfell-news', $newsChannel);
        $winterfellDaily = new Publisher('winterfell-news', $newsChannel);

        // Подписчики, которые будут подписаны на определенные группы
        $sansa = new Subscriber('Sansa Stark');
        $arya = new Subscriber('Arya Smith');
        $cersei = new Subscriber('Cersei Lannister');
        $snow = new Subscriber('Jon Snow');

        // Подписка на определенные группы подписчиков, которые были объявлены выше
        $newsChannel->subscribe('highgarden-news', $cersei);
        $newsChannel->subscribe('winterfell-news', $sansa);
        $newsChannel->subscribe('highgarden-news', $arya);
        $newsChannel->subscribe('winterfell-news', $arya);
        $newsChannel->subscribe('winterfell-news', $snow);

        // Публикация новостей в группах
        $highgardenGroup->publish('New highgarden post');
        $winterfellNews->publish('New winterfell post');
        $winterfellDaily->publish('New alternative winterfell post');
    }
}
