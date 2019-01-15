<?php

namespace Bornfight\PDependParser\MetricsCollection;

use Bornfight\PDependParser\Metrics\AfferentCouplingTrait;
use Bornfight\PDependParser\Metrics\ClassInterfaceSizeTrait;
use Bornfight\PDependParser\Metrics\ClassSizeTrait;
use Bornfight\PDependParser\Metrics\CodeRankTrait;
use Bornfight\PDependParser\Metrics\CommentLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\CouplingBetweenObjectsTrait;
use Bornfight\PDependParser\Metrics\DepthOfInheritanceTreeTrait;
use Bornfight\PDependParser\Metrics\EfferentCouplingTrait;
use Bornfight\PDependParser\Metrics\ExecutableLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\InheritedPropertiesTrait;
use Bornfight\PDependParser\Metrics\InheritedWeightedMethodCountTrait;
use Bornfight\PDependParser\Metrics\LinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\LogicalLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\NonCommentLinesOfCodeTrait;
use Bornfight\PDependParser\Metrics\NonPrivateProperties;
use Bornfight\PDependParser\Metrics\NonPrivateWeightedMethodCountTrait;
use Bornfight\PDependParser\Metrics\NumberOfAddedMethodsTrait;
use Bornfight\PDependParser\Metrics\NumberOfChildClassesTrait;
use Bornfight\PDependParser\Metrics\NumberOfConcreteClassesTrait;
use Bornfight\PDependParser\Metrics\NumberOfMethodsTrait;
use Bornfight\PDependParser\Metrics\NumberOfOverwrittenMethodsTrait;
use Bornfight\PDependParser\Metrics\NumberOfPublicMethodsTrait;
use Bornfight\PDependParser\Metrics\PropertiesTrait;
use Bornfight\PDependParser\Metrics\ReverseCodeRankTrait;
use Bornfight\PDependParser\Metrics\WeightedMethodCountTrait;
use InvalidArgumentException;

class ClassMetricsCollection
{
    /**
     * list of methods in this class.
     *
     * @var MethodMetricsCollection[]
     */
    private $methods = [];

    /**
     * fully qualified name.
     *
     * @var string
     */
    private $fqName;

    /**
     * class name.
     *
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $start;

    /**
     * @var int
     */
    private $end;

    use AfferentCouplingTrait;
    use CouplingBetweenObjectsTrait;
    use EfferentCouplingTrait;
    use DepthOfInheritanceTreeTrait;
    use NumberOfAddedMethodsTrait;
    use NumberOfChildClassesTrait;
    use NumberOfOverwrittenMethodsTrait;
    use NumberOfMethodsTrait;
    use LinesOfCodeTrait;
    use CommentLinesOfCodeTrait;
    use ExecutableLinesOfCodeTrait;
    use LogicalLinesOfCodeTrait;
    use NonCommentLinesOfCodeTrait;
    use CodeRankTrait;
    use ReverseCodeRankTrait;
    use ClassInterfaceSizeTrait;
    use ClassSizeTrait;
    use NumberOfPublicMethodsTrait;
    use PropertiesTrait;
    use InheritedPropertiesTrait;
    use NonPrivateProperties;
    use WeightedMethodCountTrait;
    use InheritedWeightedMethodCountTrait;
    use NonPrivateWeightedMethodCountTrait;

    /**
     * @var int
     */
    private $impl;

    /**
     * adds specified methodElement to the list.
     *
     * @param MethodMetricsCollection $methodElement - element to add
     */
    public function addMethod(MethodMetricsCollection $methodElement): void
    {
        $this->methods[] = $methodElement;
    }

    /**
     * @return MethodMetricsCollection[]
     */
    public function getMethods(): array
    {
        return $this->methods;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFqName(): string
    {
        return $this->fqName;
    }

    /**
     * @param string $fqName
     */
    public function setFqName(string $fqName): void
    {
        $this->fqName = $fqName;
    }

    /**
     * @return int
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @param int $start
     */
    public function setStart(int $start): void
    {
        $this->start = $start;
    }

    /**
     * @return int
     */
    public function getEnd(): int
    {
        return $this->end;
    }

    /**
     * @param int $end
     */
    public function setEnd(int $end): void
    {
        $this->end = $end;
    }
}
