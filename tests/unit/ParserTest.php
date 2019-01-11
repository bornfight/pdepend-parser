<?php namespace Bornfight\PDependParser\Tests;

use Bornfight\PDependParser\Parser;
use Codeception\Specify;
use InvalidArgumentException;

class ParserTest extends \Codeception\Test\Unit
{
    use Specify;

    /**
     * @var \Bornfight\PDependParser\Tests\UnitTester
     */
    protected $tester;

    /**
     * @var Parser
     */
    private $parser;

    private $testInputPath;

    protected function _before()
    {
        $this->parser = new Parser();
        $this->testInputPath = codecept_data_dir('test_input.xml');
    }

    public function testInitializationWithInvalidPath(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $this->parser->parse('invalid/file/path');
    }

    public function testParse(): void
    {
        $this->describe('Parser parse() method', function () {
            $this->it('should parse Metric Element', function () {
                $metric = $this->parser->parse($this->testInputPath);

                expect('attribute: generated', $metric->getGenerated())->equals('2019-01-02T14:08:05');
                expect('attribute: pdepend', $metric->getGenerated())->equals('2019-01-02T14:08:05');
                expect('metric: ahh', $metric->getAverageHierarchyHeight())->equals(1);
                expect('metric: andc', $metric->getAverageNumberOfDerivedClasses())->equals(2);
                expect('metric: calls', $metric->getNumberOfMethodOrFunctionCalls())->equals(3);
                expect('metric: ccn', $metric->getCyclomaticComplexityNumber())->equals(4);
                expect('metric: ccn2', $metric->getExtendedCyclomaticComplexityNumber())->equals(5);
            });

            $this->it('should parse Package Element', function () {
                $metric = $this->parser->parse($this->testInputPath);
                $packages = $metric->getPackages();
                [$package1, $package2] = $packages;

                expect('packagesCount', $packages)->count(2);

                expect('metric: name', $package1->getName())->equals('App\Command');
                expect('metric: noc', $package1->getNumberOfClasses())->equals(1);
                expect('metric: noi', $package1->getNumberOfInterfaces())->equals(2);
                expect('metric: nom', $package1->getNumberOfMethods())->equals(3);
                expect('metric: nof', $package1->getNumberOfFunctions())->equals(4);
                expect('metric: cr', $package1->getCodeRank())->equals(5.5);
                expect('metric: rcr', $package1->getReverseCodeRank())->equals(6.6);

                expect('metric: name', $package2->getName())->equals('App');
                expect('metric: noc', $package2->getNumberOfClasses())->equals(7);
                expect('metric: noi', $package2->getNumberOfInterfaces())->equals(8);
                expect('metric: nom', $package2->getNumberOfMethods())->equals(9);
                expect('metric: nof', $package2->getNumberOfFunctions())->equals(10);
                expect('metric: cr', $package2->getCodeRank())->equals(11.11);
                expect('metric: rcr', $package2->getReverseCodeRank())->equals(12.12);
            });

            $this->it('should parse Class Element', function () {

            });

            $this->it('should parse Method Element', function () {

            });
        });
    }
}
