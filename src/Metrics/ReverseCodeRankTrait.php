<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait CodeRank
 *
 * Google PageRank applied on Packages and Classes. Classes with a high value should be tested frequently.
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait ReverseCodeRankTrait
{
    /** @var float */
    private $reverseCodeRank;

    public function getReverseCodeRank(): float
    {
        return $this->reverseCodeRank;
    }

    public function setReverseCodeRank(float $reverseCodeRank): void
    {
        $this->reverseCodeRank = $reverseCodeRank;
    }
}
