<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Numeros
 *
 * @ApiResource(
 *     attributes={
 *          "filters"={"numeros.search", "numeros.range"}
 *     }
 * )
 * @ORM\Table(name="numeros")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NumerosRepository")
 */
class Numeros
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Groups({"occurence"})
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="un", type="smallint")
     * @Groups({"occurence"})
     */
    private $un;

    /**
     * @var int
     *
     * @ORM\Column(name="deux", type="smallint")
     * @Groups({"occurence"})
     */
    private $deux;

    /**
     * @var int
     *
     * @ORM\Column(name="trois", type="smallint")
     * @Groups({"occurence"})
     */
    private $trois;

    /**
     * @var int
     *
     * @ORM\Column(name="quatre", type="smallint")
     * @Groups({"occurence"})
     */
    private $quatre;

    /**
     * @var int
     *
     * @ORM\Column(name="cinq", type="smallint")
     * @Groups({"occurence"})
     */
    private $cinq;

    /**
     * One Numeros has Many Occurences.
     *
     * @ORM\OneToMany(targetEntity="Occurence", mappedBy="numeros")
     */
    private $occurences;

    public function __construct() {
        $this->occurences = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set un
     *
     * @param integer $un
     *
     * @return Numeros
     */
    public function setUn($un)
    {
        $this->un = $un;

        return $this;
    }

    /**
     * Get un
     *
     * @return integer
     */
    public function getUn()
    {
        return $this->un;
    }

    /**
     * Set deux
     *
     * @param integer $deux
     *
     * @return Numeros
     */
    public function setDeux($deux)
    {
        $this->deux = $deux;

        return $this;
    }

    /**
     * Get deux
     *
     * @return integer
     */
    public function getDeux()
    {
        return $this->deux;
    }

    /**
     * Set trois
     *
     * @param integer $trois
     *
     * @return Numeros
     */
    public function setTrois($trois)
    {
        $this->trois = $trois;

        return $this;
    }

    /**
     * Get trois
     *
     * @return integer
     */
    public function getTrois()
    {
        return $this->trois;
    }

    /**
     * Set quatre
     *
     * @param integer $quatre
     *
     * @return Numeros
     */
    public function setQuatre($quatre)
    {
        $this->quatre = $quatre;

        return $this;
    }

    /**
     * Get quatre
     *
     * @return integer
     */
    public function getQuatre()
    {
        return $this->quatre;
    }

    /**
     * Set cinq
     *
     * @param integer $cinq
     *
     * @return Numeros
     */
    public function setCinq($cinq)
    {
        $this->cinq = $cinq;

        return $this;
    }

    /**
     * Get cinq
     *
     * @return integer
     */
    public function getCinq()
    {
        return $this->cinq;
    }

    /**
     * Add occurence
     *
     * @param \AppBundle\Entity\Occurence $occurence
     *
     * @return Numeros
     */
    public function addOccurence(\AppBundle\Entity\Occurence $occurence)
    {
        $this->occurences[] = $occurence;

        return $this;
    }

    /**
     * Remove occurence
     *
     * @param \AppBundle\Entity\Occurence $occurence
     */
    public function removeOccurence(\AppBundle\Entity\Occurence $occurence)
    {
        $this->occurences->removeElement($occurence);
    }

    /**
     * Get occurences
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOccurences()
    {
        return $this->occurences;
    }
}
