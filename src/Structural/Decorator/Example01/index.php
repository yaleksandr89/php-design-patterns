<?php

declare(strict_types=1);

use DesignPatternsBook\Structural\Decorator\Example01\HtmlDecorator;
use DesignPatternsBook\Structural\Decorator\Example01\PlainText;
use DesignPatternsBook\Structural\Decorator\Example01\UppercaseDecorator;

require_once __DIR__ . '/../../../../vendor/autoload.php';

/**
 * Decorator — позволяет динамически добавлять поведение объекту.
 *
 * В паттерне обычно есть:
 * - контракт
 * - базовый объект
 * - базовый декоратор
 * - конкретные декораторы
 */

// Исходный объект
$text = new PlainText('hello');

// Поэтапно оборачиваем его декораторами
$text = new UppercaseDecorator($text);
$text = new HtmlDecorator($text);

// В итоге поведение "наслаивается"
echo $text->render(); // <p>HELLO</p>
