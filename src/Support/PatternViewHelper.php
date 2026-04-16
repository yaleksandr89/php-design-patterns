<?php

declare(strict_types=1);

namespace DesignPatternsBook\Support;

final class PatternViewHelper
{
    /**
     * @param array<string, string> $structure
     */
    public static function buildStructureHtml(array $structure): string
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
}
