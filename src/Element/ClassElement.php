<?php
/**
 * Created by PhpStorm.
 * User: josip
 * Date: 2019-01-03
 * Time: 10:36.
 */

namespace App\Element;

use InvalidArgumentException;

class ClassElement
{
    /**
     * list of methods in this class.
     *
     * @var array
     */
    private $methodList;

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

    /**
     * afferent coupling.
     *
     * @var int
     */
    private $ca;

    /**
     * coupling between objects.
     *
     * @var int
     */
    private $cbo;

    /**
     * efferent coupling.
     *
     * @var int
     */
    private $ce;

    /**
     * depth of inheritance tree.
     *
     * @var int
     */
    private $dit;

    /**
     * number of added methods.
     *
     * @var int
     */
    private $noam;

    /**
     * number of child classes.
     *
     * @var int
     */
    private $nocc;

    /**
     * number of overwritten methods.
     *
     * @var int
     */
    private $noom;

    /**
     * number of methods.
     *
     * @var int
     */
    private $nom;

    /**
     * lines of code.
     *
     * @var int
     */
    private $loc;

    /**
     * number of non comment lines of code.
     *
     * @var int
     */
    private $ncloc;

    /**
     * comment lines of code.
     *
     * @var int
     */
    private $cloc;

    /**
     * executable lines of code.
     *
     * @var int
     */
    private $eloc;

    /**
     * logical lines of code.
     *
     * @var int
     */
    private $lloc;

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

    /**
     * @var int
     */
    private $impl;

    /**
     * class interface size.
     *
     * @var int
     */
    private $cis;

    /**
     * class size.
     *
     * @var int
     */
    private $csz;

    /**
     * number of public methods.
     *
     * @var int
     */
    private $npm;

    /**
     * number of properties.
     *
     * @var int
     */
    private $vars;

    /**
     * number of inherited properties.
     *
     * @var int
     */
    private $varsi;

    /**
     * number of non private properties.
     *
     * @var int
     */
    private $varsnp;

    /**
     * weighted method count.
     *
     * @var int
     */
    private $wmc;

    /**
     * inherited weighted method count.
     *
     * @var int
     */
    private $wcmi;

    /**
     * non-private weighted method count.
     *
     * @var int
     */
    private $wmcnp;

    public function __construct(string $fqName)
    {
        if (!$fqName || '' === $fqName) {
            throw new InvalidArgumentException('Invalid package name');
        }

        $this->methodList = [];
        $this->fqName = $fqName;
    }

    /**
     * adds specified methodElement to the list.
     *
     * @param MethodElement $methodElement - element to add
     */
    public function addMethod(MethodElement $methodElement): void
    {
        if (!$methodElement) {
            throw new InvalidArgumentException('Method element cannot be null');
        }

        $this->methodList[] = $methodElement;
    }

    /**
     * @return array
     */
    public function getMethodList(): array
    {
        return $this->methodList;
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

    /**
     * @return int
     */
    public function getCa(): int
    {
        return $this->ca;
    }

    /**
     * @param int $ca
     */
    public function setCa(int $ca): void
    {
        $this->ca = $ca;
    }

    /**
     * @return int
     */
    public function getCbo(): int
    {
        return $this->cbo;
    }

    /**
     * @param int $cbo
     */
    public function setCbo(int $cbo): void
    {
        $this->cbo = $cbo;
    }

    /**
     * @return int
     */
    public function getCe(): int
    {
        return $this->ce;
    }

    /**
     * @param int $ce
     */
    public function setCe(int $ce): void
    {
        $this->ce = $ce;
    }

    /**
     * @return int
     */
    public function getDit(): int
    {
        return $this->dit;
    }

    /**
     * @param int $dit
     */
    public function setDit(int $dit): void
    {
        $this->dit = $dit;
    }

    /**
     * @return int
     */
    public function getNoam(): int
    {
        return $this->noam;
    }

    /**
     * @param int $noam
     */
    public function setNoam(int $noam): void
    {
        $this->noam = $noam;
    }

    /**
     * @return int
     */
    public function getNocc(): int
    {
        return $this->nocc;
    }

    /**
     * @param int $nocc
     */
    public function setNocc(int $nocc): void
    {
        $this->nocc = $nocc;
    }

    /**
     * @return int
     */
    public function getNoom(): int
    {
        return $this->noom;
    }

    /**
     * @param int $noom
     */
    public function setNoom(int $noom): void
    {
        $this->noom = $noom;
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
    public function getLoc(): int
    {
        return $this->loc;
    }

    /**
     * @param int $loc
     */
    public function setLoc(int $loc): void
    {
        $this->loc = $loc;
    }

    /**
     * @return int
     */
    public function getCloc(): int
    {
        return $this->cloc;
    }

    /**
     * @param int $cloc
     */
    public function setCloc(int $cloc): void
    {
        $this->cloc = $cloc;
    }

    /**
     * @return int
     */
    public function getEloc(): int
    {
        return $this->eloc;
    }

    /**
     * @param int $eloc
     */
    public function setEloc(int $eloc): void
    {
        $this->eloc = $eloc;
    }

    /**
     * @return int
     */
    public function getLloc(): int
    {
        return $this->lloc;
    }

    /**
     * @param int $lloc
     */
    public function setLloc(int $lloc): void
    {
        $this->lloc = $lloc;
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

    /**
     * @return int
     */
    public function getImpl(): int
    {
        return $this->impl;
    }

    /**
     * @param int $impl
     */
    public function setImpl(int $impl): void
    {
        $this->impl = $impl;
    }

    /**
     * @return int
     */
    public function getCis(): int
    {
        return $this->cis;
    }

    /**
     * @param int $cis
     */
    public function setCis(int $cis): void
    {
        $this->cis = $cis;
    }

    /**
     * @return int
     */
    public function getCsz(): int
    {
        return $this->csz;
    }

    /**
     * @param int $csz
     */
    public function setCsz(int $csz): void
    {
        $this->csz = $csz;
    }

    /**
     * @return int
     */
    public function getNpm(): int
    {
        return $this->npm;
    }

    /**
     * @param int $npm
     */
    public function setNpm(int $npm): void
    {
        $this->npm = $npm;
    }

    /**
     * @return int
     */
    public function getVars(): int
    {
        return $this->vars;
    }

    /**
     * @param int $vars
     */
    public function setVars(int $vars): void
    {
        $this->vars = $vars;
    }

    /**
     * @return int
     */
    public function getVarsi(): int
    {
        return $this->varsi;
    }

    /**
     * @param int $varsi
     */
    public function setVarsi(int $varsi): void
    {
        $this->varsi = $varsi;
    }

    /**
     * @return int
     */
    public function getVarsnp(): int
    {
        return $this->varsnp;
    }

    /**
     * @param int $varsnp
     */
    public function setVarsnp(int $varsnp): void
    {
        $this->varsnp = $varsnp;
    }

    /**
     * @return int
     */
    public function getWmc(): int
    {
        return $this->wmc;
    }

    /**
     * @param int $wmc
     */
    public function setWmc(int $wmc): void
    {
        $this->wmc = $wmc;
    }

    /**
     * @return int
     */
    public function getWcmi(): int
    {
        return $this->wcmi;
    }

    /**
     * @param int $wcmi
     */
    public function setWcmi(int $wcmi): void
    {
        $this->wcmi = $wcmi;
    }

    /**
     * @return int
     */
    public function getWmcnp(): int
    {
        return $this->wmcnp;
    }

    /**
     * @param int $wmcnp
     */
    public function setWmcnp(int $wmcnp): void
    {
        $this->wmcnp = $wmcnp;
    }

    /**
     * @return int
     */
    public function getNcloc(): int
    {
        return $this->ncloc;
    }

    /**
     * @param int $ncloc
     */
    public function setNcloc(int $ncloc): void
    {
        $this->ncloc = $ncloc;
    }
}
