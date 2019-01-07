<?php
/**
 * Created by PhpStorm.
 * User: josip
 * Date: 2019-01-03
 * Time: 10:34.
 */

namespace App\Element;

use InvalidArgumentException;

class PackageElement
{
    private $name;

    /**
     * list of classes in this package.
     *
     * @var array
     */
    private $classList;

    /**
     * number of classes.
     *
     * @var int
     */
    private $noc;

    /**
     * number of interfaces.
     *
     * @var int
     */
    private $noi;

    /**
     * number of methods.
     *
     * @var int
     */
    private $nom;

    /**
     * number of functions.
     *
     * @var int
     */
    private $nof;

    /**
     * code rank.
     *
     * @var float
     */
    private $cr;

    /**
     * reverse code rank.
     *
     * @var float
     */
    private $rcr;

    public function __construct(string $name)
    {
        if (!$name || '' === $name) {
            throw new \InvalidArgumentException('Invalid package name');
        }

        $this->name = $name;

        $this->classList = [];
    }

    public function addClassElement(ClassElement $classElement): void
    {
        $this->classList[] = $classElement;
    }

    /**
     * @return array
     */
    public function getClassList(): array
    {
        return $this->classList;
    }

    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getNoc(): int
    {
        return $this->noc;
    }

    /**
     * @param int $noc
     */
    public function setNoc(int $noc): void
    {
        $this->noc = $noc;
    }

    /**
     * @return int
     */
    public function getNoi(): int
    {
        return $this->noi;
    }

    /**
     * @param int $noi
     */
    public function setNoi(int $noi): void
    {
        $this->noi = $noi;
    }

    /**
     * @return int
     */
    public function getNom(): int
    {
        return $this->nom;
    }

    /**
     * @param int $nom
     */
    public function setNom(int $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getNof(): int
    {
        return $this->nof;
    }

    /**
     * @param int $nof
     */
    public function setNof(int $nof): void
    {
        $this->nof = $nof;
    }

    /**
     * @return float
     */
    public function getCr(): float
    {
        return $this->cr;
    }

    /**
     * @param float $cr
     */
    public function setCr(float $cr): void
    {
        $this->cr = $cr;
    }

    /**
     * @return float
     */
    public function getRcr(): float
    {
        return $this->rcr;
    }

    /**
     * @param float $rcr
     */
    public function setRcr(float $rcr): void
    {
        $this->rcr = $rcr;
    }
}
