<?php

declare(strict_types=1);

use DesignPatternsBook\Behavioral\Strategy\Example01\HtmlFormatter;
use DesignPatternsBook\Behavioral\Strategy\Example01\TextProcessor;
use DesignPatternsBook\Behavioral\Strategy\Example01\UpperFormatter;

require_once __DIR__ . '/../../../../vendor/autoload.php';

/**
 * Strategy — позволяет менять поведение объекта во время выполнения.
 *
 * В паттерне обычно есть:
 * - контракт стратегий: FormatterInterface
 * - конкретные стратегии: HtmlFormatter, UpperFormatter
 * - контекст использования: TextProcessor
 */

$htmlProcessor = new TextProcessor(new HtmlFormatter());
echo $htmlProcessor->process('hello') . PHP_EOL; // <p>hello</p>
echo '<hr>' . PHP_EOL;
$upperProcessor = new TextProcessor(new UpperFormatter());
echo $upperProcessor->process('hello') . PHP_EOL; // HELLO
