<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait NPathComplexity
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait NPathComplexityTrait
{
    private $nPathComplexity;

    public function getNPathComplexity(): int
    {
        return $this->nPathComplexity;
    }

    public function setNPathComplexity(int $nPathComplexity): void
    {
        $this->nPathComplexity = $nPathComplexity;
    }
}
