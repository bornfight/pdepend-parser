<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait ClassInterfaceSizeTrait
 *
 * Number of non private methods and properties of a class
 * CIS = public(NOM + VARS)
 * Measures the size of the interface from other parts of the system to a class.
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait ClassInterfaceSizeTrait
{
    /**
     * @var int
     */
    private $classInterfaceSize;

    public function getClassInterfaceSize(): int
    {
        return $this->classInterfaceSize;
    }

    public function setClassInterfaceSize(int $classInterfaceSize): void
    {
        $this->classInterfaceSize = $classInterfaceSize;
    }
}
