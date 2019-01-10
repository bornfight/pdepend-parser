<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadDifficultyTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadDifficultyTrait
{
    /** @var float */
    private $halsteadDifficulty;

    public function getHalsteadDifficulty(): float
    {
        return $this->halsteadDifficulty;
    }

    public function setHalsteadDifficulty(float $halsteadDifficulty): void
    {
        $this->halsteadDifficulty = $halsteadDifficulty;
    }
}
