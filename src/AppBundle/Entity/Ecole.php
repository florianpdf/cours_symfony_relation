<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Eleve;

/**
 * Ecole
 *
 * @ORM\Table(name="ecole")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EcoleRepository")
 */
class Ecole
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=120)
     */
    private $ville;

    /**
     * @var int
     *
     * @ORM\Column(name="capacity", type="integer")
     */
    private $capacity;

    /**
     * @var string
     *
     * @ORM\Column(name="region", type="string", length=100)
     */
    private $region;

	/**
	 * @var Eleve $eleves
	 *
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\Eleve", mappedBy="ecole")
	 */
    private $eleves;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->eleves = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Ecole
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Ecole
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Ecole
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Add elefe
     *
     * @param \AppBundle\Entity\Eleve $elefe
     *
     * @return Ecole
     */
    public function addElefe(\AppBundle\Entity\Eleve $elefe)
    {
        $this->eleves[] = $elefe;

        return $this;
    }

    /**
     * Remove elefe
     *
     * @param \AppBundle\Entity\Eleve $elefe
     */
    public function removeElefe(\AppBundle\Entity\Eleve $elefe)
    {
        $this->eleves->removeElement($elefe);
    }

    /**
     * Get eleves
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEleves()
    {
        return $this->eleves;
    }
}
