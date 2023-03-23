<?php

namespace Behavioral\Strategy;

use Behavioral\Entity\User;
use DateTimeImmutable;
use Exception;

class Controller
{
    private $name = 'Стратегия';

    /**
     * @throws Exception
     */
    public function strategy(): void
    {
        $period = [
            (new DateTimeImmutable())->format('Y-m-01'),
            (new DateTimeImmutable())->format('Y-m-t')
        ];

        $result = (new SalaryManager($period, $this->getUsers()))->handle();
        dd($result);
    }

    private function getUsers(): array
    {
        return [
            new User(1, 'Любимова Милана Александровна', 'florist'),
            new User(2, 'Мешкова Нина Адамовна', 'courierHiking'),
            new User(3, 'Фролова Вера Максимовна', 'logist'),
            new User(4, 'Тихонова Мария Леонидовна', 'logist'),
            new User(5, 'Плотникова Юлия Георгиевна', 'logist'),
            new User(6, 'Никитин Михаил Егорович', 'courierHiking'),
            new User(7, 'Журавлев Даниил Саввич', 'courierAuto'),
            new User(8, 'Муравьева Мария Романовна', 'courierAuto'),
            new User(9, 'Киселева Алина Романовна', 'florist'),
            new User(10, 'Шаповалова Анна Леонидовна', 'courierAuto'),
            new User(11, 'Васильев Артём Максимович', 'courierAutoNight'),
        ];
    }
}
