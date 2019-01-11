<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NumberOfMethodOrFunctionCallsTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NumberOfMethodOrFunctionCallsTrait
{
    private $numberOfMethodOrFunctionCalls;

    public function getNumberOfMethodOrFunctionCalls(): int
    {
        return $this->numberOfMethodOrFunctionCalls;
    }

    public function setNumberOfMethodOrFunctionCalls(int $numberOfMethodOrFunctionCalls): void
    {
        $this->numberOfMethodOrFunctionCalls = $numberOfMethodOrFunctionCalls;
    }
}
