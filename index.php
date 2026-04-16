<?php

declare(strict_types=1);

$patternCatalog = require __DIR__ . '/config/pattern-catalog.php';

/**
 * Преобразует структуру паттерна в HTML-список для popover.
 *
 * @param array<string, string> $structure
 */
function buildPatternStructureHtml(array $structure): string
{
    $items = [];

    foreach ($structure as $role => $className) {
        $items[] = sprintf(
            '<li><span class="pattern-structure-role">%s</span><br><code>%s</code></li>',
            htmlspecialchars($role, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'),
            htmlspecialchars($className, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'),
        );
    }

    return '<ul class="pattern-structure-list">' . implode('', $items) . '</ul>';
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Паттерны проектирования (PHP)</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
<div class="container py-5">
    <header class="page-header mb-5">
        <h1 class="display-5 fw-bold mb-3">Паттерны проектирования (PHP)</h1>
        <p class="lead text-secondary mb-0">
            Учебный проект с практическими примерами паттернов проектирования на PHP.
        </p>
    </header>

    <?php foreach ($patternCatalog as $group): ?>
        <section class="pattern-group mb-5">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="h2 mb-0"><?= htmlspecialchars($group['title']) ?></h2>
            </div>

            <div class="row g-4">
                <?php foreach ($group['patterns'] as $pattern): ?>
                    <?php
                    $structureHtml = buildPatternStructureHtml($pattern['structure']);
                    $isImplemented = $pattern['isImplemented'] === true;
                    ?>
                    <div class="col-12 col-md-6 col-xl-4">
                        <article class="card pattern-card h-100 border-0 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex align-items-start justify-content-between gap-3 mb-3">
                                    <h3 class="h4 card-title mb-0">
                                        <?= htmlspecialchars($pattern['name']) ?>
                                    </h3>

                                    <?php if ($isImplemented): ?>
                                        <span class="badge rounded-pill text-bg-success">Реализован</span>
                                    <?php else: ?>
                                        <span class="badge rounded-pill text-bg-secondary">В плане</span>
                                    <?php endif; ?>
                                </div>

                                <p class="card-text text-secondary flex-grow-1 mb-4">
                                    <?= htmlspecialchars($pattern['description']) ?>
                                </p>

                                <div class="d-flex align-items-center justify-content-between gap-3 mt-auto">
                                    <?php if ($pattern['url'] !== null && $isImplemented): ?>
                                        <a
                                            href="<?= htmlspecialchars($pattern['url']) ?>"
                                            class="btn btn-primary js-pattern-link"
                                        >
                                            Открыть пример
                                        </a>
                                    <?php else: ?>
                                        <button type="button" class="btn btn-outline-secondary" disabled>
                                            Пока недоступно
                                        </button>
                                    <?php endif; ?>

                                    <button
                                        type="button"
                                        class="pattern-help-button"
                                        data-bs-toggle="popover"
                                        data-bs-trigger="hover focus"
                                        data-bs-placement="left"
                                        data-bs-html="true"
                                        data-bs-title="<?= htmlspecialchars($pattern['name']) ?>: структура"
                                        data-bs-content="<?= htmlspecialchars($structureHtml, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>"
                                        aria-label="Показать структуру паттерна <?= htmlspecialchars($pattern['name']) ?>"
                                        title="Структура паттерна"
                                    >
                                        <span class="pattern-help-icon">i</span>
                                    </button>
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