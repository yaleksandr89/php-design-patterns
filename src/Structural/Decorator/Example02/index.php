<?php

declare(strict_types=1);

use DesignPatternsBook\Structural\Decorator\Example02\HtmlDecorator;
use DesignPatternsBook\Structural\Decorator\Example02\PlainText;
use DesignPatternsBook\Structural\Decorator\Example02\UppercaseDecorator;

require_once __DIR__ . '/../../../../vendor/autoload.php';

/**
 * Decorator без базового декоратора.
 *
 * Каждый слой сам реализует контракт и сам хранит
 * предыдущий объект в цепочке.
 *
 * Это ближе по идее к middleware:
 * каждый слой сам вызывает "следующий".
 */

$text = new PlainText('hello');
$text = new UppercaseDecorator($text);
$text = new HtmlDecorator($text);

echo $text->render(); // <p>HELLO</p>
