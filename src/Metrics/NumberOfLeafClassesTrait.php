<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfLeafClassesTrait
 *
 * (final) classes
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfLeafClassesTrait
{
    private $numberOfLeafClasses;

    public function getNumberOfLeafClasses(): int
    {
        return $this->numberOfLeafClasses;
    }

    public function setNumberOfLeafClasses(int $numberOfLeafClasses): void
    {
        $this->numberOfLeafClasses = $numberOfLeafClasses;
    }
}
