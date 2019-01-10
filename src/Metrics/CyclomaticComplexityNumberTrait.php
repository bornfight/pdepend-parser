<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait CyclomaticComplexityNumberTrait
 *
 * @see https://pdepend.org/documentation/software-metrics/cyclomatic-complexity.html
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait CyclomaticComplexityNumberTrait
{
    private $cyclomaticComplexityNumber;

    public function getCyclomaticComplexityNumber(): int
    {
        return $this->cyclomaticComplexityNumber;
    }

    public function setCyclomaticComplexityNumber(int $cyclomaticComplexityNumber): void
    {
        $this->cyclomaticComplexityNumber = $cyclomaticComplexityNumber;
    }
}
