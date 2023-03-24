<?php

namespace Generating\ObjectPool\Classes;

use Generating\ObjectPool\Entity\Calculator;
use Generating\ObjectPool\Entity\CreditCard;
use Generating\ObjectPool\Entity\ObjectPull;
use Generating\ObjectPool\Entity\User;

class ObjectPullDemo
{
    private ObjectPull $objectPull;

    public function __construct()
    {
        $this->objectPull = ObjectPull::getInstance();

        $user = new User();
        $creditCard = new CreditCard();
        $calculator = new Calculator();

        $this->objectPull
            ->addObject($user)
            ->addObject($creditCard)
            ->addObject($calculator);
    }

    public function run()
    {
        //dd(1, $this->objectPull);

        /** @var CreditCard $creditCard */
        $creditCard = $this->objectPull->getObject(CreditCard::class);
        $creditCard->cardId = '1111 2222 3333 4444';
        $creditCard->cardHolder = 'Card Holder 1';
        $creditCard->cardPwd = '123';

        /** @var User $user */
        $user = $this->objectPull->getObject(User::class);
        $user->name = 'USER NAME';

        /** @var User $user2 */
        $user2 = $this->objectPull->getObject(User::class);
        //dd(2, $this->objectPull, [$user, $user2, $creditCard]);

        $this->objectPull->release($creditCard);
        $this->objectPull->release($user);
        //dd(3, $this->objectPull);

        /** @var CreditCard $creditCard */
        $creditCard2 = $this->objectPull->getObject(CreditCard::class);
        $creditCard2->cardId = '5555 6666 7777 8888';
        $creditCard2->cardHolder = 'Card Holder 2';
        $creditCard2->cardPwd = '456';
        dd(4, $this->objectPull, [$creditCard, $user], $creditCard2);
    }
}
