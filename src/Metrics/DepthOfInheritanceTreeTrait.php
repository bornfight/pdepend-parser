<?php

namespace Bornfight\PDependParser\Metrics;

/**
 * Trait DepthOfInheritanceTreeTrait
 *
 * Depth of inheritance to root class
 *
 * @package Bornfight\PDependParser\Metrics
 */
trait DepthOfInheritanceTreeTrait
{
    private $depthOfInheritanceTree;

    public function getDepthOfInheritanceTree(): int
    {
        return $this->depthOfInheritanceTree;
    }

    public function setDepthOfInheritanceTree(int $depthOfInheritanceTree): void
    {
        $this->depthOfInheritanceTree = $depthOfInheritanceTree;
    }
}
