<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Etoiles
 *
 * @ApiResource(
 *     attributes={
 *          "filters"={"etoiles.search", "etoiles.range"}
 *     }
 * )
 * @ORM\Table(name="etoiles")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtoilesRepository")
 */
class Etoiles
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
     * One Etoiles has Many Occurences.
     * @ORM\OneToMany(targetEntity="Occurence", mappedBy="etoiles")
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
     * @return Etoiles
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
     * @return Etoiles
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
     * Add occurence
     *
     * @param \AppBundle\Entity\Occurence $occurence
     *
     * @return Etoiles
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
