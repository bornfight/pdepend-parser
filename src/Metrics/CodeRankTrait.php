<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait CodeRank
 *
 * Google PageRank applied on Packages and Classes. Classes with a high value should be tested frequently.
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait CodeRankTrait
{
    private $codeRank;

    public function getCodeRank(): float
    {
        return $this->codeRank;
    }

    public function setCodeRank(float $codeRank): void
    {
        $this->codeRank = $codeRank;
    }
}
