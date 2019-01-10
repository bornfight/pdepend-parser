<?php

namespace Bornfight\PDependParser\MetricsCollection;

use Bornfight\PDependParser\Metrics\AverageHierarchyHeightTrait;
use Bornfight\PDependParser\Metrics\AverageNumberOfDerivedClassesTrait;
use Bornfight\PDependParser\Metrics\CommentLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\CyclomaticComplexityNumberTrait;
use Bornfight\PDependParser\Metrics\ExecutableLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\ExtendedCyclomaticComplexityNumberTrait;
use Bornfight\PDependParser\Metrics\LinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\LogicalLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\MaxDepthOfInheritanceTreeTrait;
use Bornfight\PDependParser\Metrics\NonCommentLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\NumberOfAbstractClassesTrait;
use Bornfight\PDependParser\Metrics\NumberOfConcreteClassesTrait;
use Bornfight\PDependParser\Metrics\NumberOfFanoutsTrait;
use Bornfight\PDependParser\Metrics\NumberOfLeafClassesTrait;
use Bornfight\PDependParser\Metrics\NumberOfMethodOrFunctionCallsTrait;

class ProjectMetricsCollection
{
    use AverageHierarchyHeightTrait;
    use AverageNumberOfDerivedClassesTrait;
    use NumberOfMethodOrFunctionCallsTrait;
    use CyclomaticComplexityNumberTrait;
    use ExtendedCyclomaticComplexityNumberTrait;
    use CommentLinesOfCodeTrait;
    use NumberOfAbstractClassesTrait;
    use NumberOfConcreteClassesTrait;
    use ExecutableLinesOfCodeTrait;
    use NumberOfFanoutsTrait;
    use NumberOfLeafClassesTrait;
    use LogicalLinesOfCodeTrait;
    use LinesOfCodeTrait;
    use MaxDepthOfInheritanceTreeTrait;
    use NonCommentLinesOfCodeTrait;


    /**
     * @var PackageMetricsCollection[]
     */
    private $packages = [];

    /**
     * @var string
     */
    private $generated;

    /**
     * @var string
     */
    private $pdepend;

    /**
     * @return string
     */
    public function getGenerated(): string
    {
        return $this->generated;
    }

    /**
     * @param string $generated
     */
    public function setGenerated(string $generated): void
    {
        $this->generated = $generated;
    }

    /**
     * @return string
     */
    public function getPdepend(): string
    {
        return $this->pdepend;
    }

    /**
     * @param string $pdepend
     */
    public function setPdepend(string $pdepend): void
    {
        $this->pdepend = $pdepend;
    }

    public function addPackage(PackageMetricsCollection $packageElement): void
    {
        $this->packages[] = $packageElement;
    }

    /**
     * @return PackageMetricsCollection[]
     */
    public function getPackages(): array
    {
        return $this->packages;
    }
}
