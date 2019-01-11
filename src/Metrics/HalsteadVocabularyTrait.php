<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait HalsteadVocabularyTrait
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait HalsteadVocabularyTrait
{
    /** @var int */
    private $halsteadVocabulary;

    public function getHalsteadVocabulary(): int
    {
        return $this->halsteadVocabulary;
    }

    public function setHalsteadVocabulary(int $halsteadVocabulary): void
    {
        $this->halsteadVocabulary = $halsteadVocabulary;
    }
}
