<?php

declare(strict_types=1);

namespace DesignPatternsBook\Support;

final class PatternCatalogViewDataBuilder
{
    /**
     * @param array<string, mixed> $pattern
     * @return array<string, mixed>
     */
    public static function buildPattern(array $pattern): array
    {
        $examples = [];

        foreach (($pattern['examples'] ?? []) as $example) {
            $exampleStructure = $example['structure'] ?? [];

            $examples[] = [
                'name' => $example['name'] ?? '',
                'title' => $example['title'] ?? '',
                'url' => $example['url'] ?? null,
                'isImplemented' => ($example['isImplemented'] ?? false) === true,
                'isReady' => ($example['isImplemented'] ?? false) === true && ($example['url'] ?? null) !== null,
                'structure' => $exampleStructure,
                'structureHtml' => $exampleStructure !== []
                    ? PatternViewHelper::buildStructureHtml($exampleStructure)
                    : '',
            ];
        }

        return [
            'name' => $pattern['name'] ?? '',
            'description' => $pattern['description'] ?? '',
            'isImplemented' => ($pattern['isImplemented'] ?? false) === true,
            'examples' => $examples,
        ];
    }
}
