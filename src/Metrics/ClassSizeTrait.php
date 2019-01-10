<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait ClassSizeTrait
 *
 * Number of methods and properties of a class:
 * CSZ = NOM + VARS
 * Measures the size of a class concerning operations and data.
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait ClassSizeTrait
{
    private $classSize;

    public function getClassSize(): int
    {
        return $this->classSize;
    }

    public function setClassSize(int $classSize): void
    {
        $this->classSize = $classSize;
    }
}
