<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Occurence
 *
 * @ApiResource(
 *     attributes={
 *          "filters"={"occurence.date", "occurence.search"},
 *          "normalization_context"={"groups"={"occurence"}}
 *     }
 * )
 * @ORM\Table(name="occurence")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OccurenceRepository")
 */
class Occurence
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
     * @var \DateTime
     *
     * @ORM\Column(name="occurAt", type="date")
     * @Groups({"occurence"})
     */
    private $occurAt;

    /**
     * Many Numeroses have One Occurence.
     * @ORM\ManyToOne(targetEntity="Numeros", inversedBy="occurences")
     * @ORM\JoinColumn(name="numeros_id", referencedColumnName="id")
     * @Groups({"occurence"})
     */
    private $numeros;

    /**
     * Many Etoiles have One Occurence. //chaque ligne d'etoiles => une occurence
     * @ORM\ManyToOne(targetEntity="Etoiles", inversedBy="occurences")
     * @ORM\JoinColumn(name="etoiles_id", referencedColumnName="id")
     * @Groups({"occurence"})
     */
    private $etoiles;


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
     * Set occurAt
     *
     * @param \DateTime $occurAt
     *
     * @return Occurence
     */
    public function setOccurAt($occurAt)
    {
        $this->occurAt = $occurAt;

        return $this;
    }

    /**
     * Get occurAt
     *
     * @return \DateTime
     */
    public function getOccurAt()
    {
        return $this->occurAt;
    }

    /**
     * Set numeros
     *
     * @param \AppBundle\Entity\Numeros $numeros
     *
     * @return Occurence
     */
    public function setNumeros(\AppBundle\Entity\Numeros $numeros = null)
    {
        $this->numeros = $numeros;

        return $this;
    }

    /**
     * Get numeros
     *
     * @return \AppBundle\Entity\Numeros
     */
    public function getNumeros()
    {
        return $this->numeros;
    }

    /**
     * Set etoiles
     *
     * @param \AppBundle\Entity\Etoiles $etoiles
     *
     * @return Occurence
     */
    public function setEtoiles(\AppBundle\Entity\Etoiles $etoiles = null)
    {
        $this->etoiles = $etoiles;

        return $this;
    }

    /**
     * Get etoiles
     *
     * @return \AppBundle\Entity\Etoiles
     */
    public function getEtoiles()
    {
        return $this->etoiles;
    }
}
