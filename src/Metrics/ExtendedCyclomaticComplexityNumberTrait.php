<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait ExtendedCyclomaticComplexityNumberTrait
 *
 * @see https://pdepend.org/documentation/software-metrics/cyclomatic-complexity.html
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait ExtendedCyclomaticComplexityNumberTrait
{
    private $extendedCyclomaticComplexityNumber;

    public function getExtendedCyclomaticComplexityNumber(): int
    {
        return $this->extendedCyclomaticComplexityNumber;
    }

    public function setExtendedCyclomaticComplexityNumber(int $extendedCyclomaticComplexityNumber): void
    {
        $this->extendedCyclomaticComplexityNumber = $extendedCyclomaticComplexityNumber;
    }
}
