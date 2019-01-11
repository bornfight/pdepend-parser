<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadVocabularyTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadVocabularyTrait
{
    /** @var float */
    private $halsteadVocabulary;

    public function getHalsteadVocabulary(): float
    {
        return $this->halsteadVocabulary;
    }

    public function setHalsteadVocabulary(float $halsteadVocabulary): void
    {
        $this->halsteadVocabulary = $halsteadVocabulary;
    }
}
