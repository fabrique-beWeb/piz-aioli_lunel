<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table(name="pizAioli_admin")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdminRepository")
 */
class Admin
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="pizzasListPizza", type="string", length=255)
     */
    private $pizzasListPizza;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Admin
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set pizzasListPizza
     *
     * @param string $pizzasListPizza
     *
     * @return Admin
     */
    public function setPizzasListPizza($pizzasListPizza)
    {
        $this->pizzasListPizza = $pizzasListPizza;

        return $this;
    }

    /**
     * Get pizzasListPizza
     *
     * @return string
     */
    public function getPizzasListPizza()
    {
        return $this->pizzasListPizza;
    }
}

