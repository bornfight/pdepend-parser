<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NPathComplexity
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NPathComplexityTrait
{
    private $NPathComplexity;

    public function getNPathComplexity(): int
    {
        return $this->NPathComplexity;
    }

    public function setNPathComplexity(int $NPathComplexity): void
    {
        $this->NPathComplexity = $NPathComplexity;
    }
}
