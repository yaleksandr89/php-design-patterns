<?php

declare(strict_types=1);

use DesignPatternsBook\Support\PatternCatalogViewDataBuilder;

require_once __DIR__ . '/../vendor/autoload.php';

$patternCatalog = require __DIR__ . '/../config/pattern-catalog.php';

$viewData = [];

foreach ($patternCatalog as $group) {
    $patterns = [];

    foreach (($group['patterns'] ?? []) as $pattern) {
        $patterns[] = PatternCatalogViewDataBuilder::buildPattern($pattern);
    }

    $viewData[] = [
            'title' => $group['title'] ?? '',
            'patterns' => $patterns,
    ];
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Паттерны проектирования (PHP)</title>
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="/assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
<div class="container py-5">
    <header class="page-header mb-5">
        <h1 class="display-5 fw-bold mb-3">Паттерны проектирования (PHP)</h1>
        <p class="lead text-secondary mb-0">
            Проект с практическими примерами паттернов проектирования на PHP.
        </p>
    </header>

    <?php foreach ($viewData as $group) : ?>
        <?php
        $groupTitle = htmlspecialchars(
            $group['title'],
            ENT_QUOTES | ENT_SUBSTITUTE,
            'UTF-8'
        );
        ?>
        <section class="pattern-group mb-5">
            <div class="mb-4">
                <h2 class="h2 mb-0">
                    <?= $groupTitle ?>
                </h2>
            </div>

            <div class="row g-4">
                <?php foreach ($group['patterns'] as $pattern) : ?>
                    <?php
                    $patternName = htmlspecialchars(
                        $pattern['name'],
                        ENT_QUOTES | ENT_SUBSTITUTE,
                        'UTF-8'
                    );

                    $patternDescription = htmlspecialchars(
                        $pattern['description'],
                        ENT_QUOTES | ENT_SUBSTITUTE,
                        'UTF-8'
                    );
                    ?>
                    <div class="col-12 col-md-6 col-xl-4">
                        <article class="card pattern-card h-100 border-0 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                                    <h3 class="h4 card-title mb-0">
                                        <?= $patternName ?>
                                    </h3>

                                    <?php if ($pattern['isImplemented']) : ?>
                                        <span class="badge rounded-pill text-bg-success">Реализован</span>
                                    <?php else : ?>
                                        <span class="badge rounded-pill text-bg-secondary">В плане</span>
                                    <?php endif; ?>
                                </div>

                                <p class="card-text text-secondary mb-4">
                                    <?= $patternDescription ?>
                                </p>

                                <div class="mt-auto">
                                    <div class="mb-3">
                                        <h4 class="h6 text-uppercase text-secondary mb-0">Примеры</h4>
                                    </div>

                                    <?php if ($pattern['examples'] === []) : ?>
                                        <div class="text-secondary small">
                                            Примеры пока не добавлены.
                                        </div>
                                    <?php else : ?>
                                        <div class="list-group list-group-flush pattern-example-list">
                                            <?php foreach ($pattern['examples'] as $example) : ?>
                                                <?php
                                                $exampleName = htmlspecialchars(
                                                    $example['name'],
                                                    ENT_QUOTES | ENT_SUBSTITUTE,
                                                    'UTF-8'
                                                );

                                                $exampleTitle = htmlspecialchars(
                                                    $example['title'],
                                                    ENT_QUOTES | ENT_SUBSTITUTE,
                                                    'UTF-8'
                                                );

                                                $structureTitle = htmlspecialchars(
                                                    $pattern['name'] . ' / ' . $example['name'],
                                                    ENT_QUOTES | ENT_SUBSTITUTE,
                                                    'UTF-8'
                                                );

                                                $structureContent = htmlspecialchars(
                                                    $example['structureHtml'],
                                                    ENT_QUOTES | ENT_SUBSTITUTE,
                                                    'UTF-8'
                                                );

                                                $structureAriaLabel = htmlspecialchars(
                                                    'Показать структуру примера ' . $example['name'],
                                                    ENT_QUOTES | ENT_SUBSTITUTE,
                                                    'UTF-8'
                                                );

                                                $exampleUrl = htmlspecialchars(
                                                    (string) $example['url'],
                                                    ENT_QUOTES | ENT_SUBSTITUTE,
                                                    'UTF-8'
                                                );
                                                ?>
                                                <div class="list-group-item">
                                                    <div class="d-flex justify-content-between align-items-start gap-3">
                                                        <div class="me-3 flex-grow-1">
                                                            <div class="fw-semibold">
                                                                <?= $exampleName ?>
                                                            </div>
                                                            <div class="small text-secondary">
                                                                <?= $exampleTitle ?>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex align-items-center gap-2">
                                                            <?php if ($example['structureHtml'] !== '') : ?>
                                                                <button
                                                                    type="button"
                                                                    class="pattern-help-button"
                                                                    data-bs-toggle="popover"
                                                                    data-bs-trigger="hover focus"
                                                                    data-bs-placement="left"
                                                                    data-bs-html="true"
                                                                    data-bs-title="<?= $structureTitle ?>: структура"
                                                                    data-bs-content="<?= $structureContent ?>"
                                                                    aria-label="<?= $structureAriaLabel ?>"
                                                                    title="Структура примера"
                                                                >
                                                                    <span class="pattern-help-icon">i</span>
                                                                </button>
                                                            <?php endif; ?>

                                                            <?php if ($example['isReady']) : ?>
                                                                <a
                                                                    href="<?= $exampleUrl ?>"
                                                                    class="btn btn-sm btn-primary"
                                                                >
                                                                    Открыть
                                                                </a>
                                                            <?php else : ?>
                                                                <span class="badge text-bg-secondary rounded-pill">
                                                                    Скоро
                                                                </span>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>
</div>

<script src="/assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>
<script src="/assets/js/app.js"></script>
</body>
</html>