<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Query\Expr\Base;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints\File;

/**
 * Pizza
 *
 * @ORM\Table(name="pizAioli_pizza")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PizzaRepository")
 */
class Pizza implements \JsonSerializable
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
     * @ORM\Column(name="nom_pizza", type="string", length=255)
     */
    private $nomPizza;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity = "Taille")
     * @ORM\JoinColumn(name = "fk_taille", referencedColumnName = "id")
     */
    private $taille;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity = "Base")
     * @ORM\JoinColumn(name = "fk_base", referencedColumnName = "id")
     */
    private $base;

    /**
     * @var string
     *
     * @ORM\Column(name="ingredients", type="string", length=255)
     */
    private $ingredients;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255)
     */
    private $prix;

    /**
     * @var UploadedFile
     * @ORM\Column(name="image", type="string", length=255)
     * @File(mimeTypes={"image/jpg","image/jpeg","image/png"})
     */
    private $image;

    /**
     * @var string
     * 
     * @ORM\ManyToOne(targetEntity = "Ingredients")
     * @ORM\JoinColumn(name = "fk_supp", referencedColumnName = "id")
     */
    private $supplements;


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
     * Set nomPizza
     *
     * @param string $nomPizza
     *
     * @return Pizza
     */
    public function setNomPizza($nomPizza)
    {
        $this->nomPizza = $nomPizza;

        return $this;
    }

    /**
     * Get nomPizza
     *
     * @return string
     */
    public function getNomPizza()
    {
        return $this->nomPizza;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return Pizza
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set base
     *
     * @param string $base
     *
     * @return Pizza
     */
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return string
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set ingredients
     *
     * @param string $ingredients
     *
     * @return Pizza
     */
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    /**
     * Get ingredients
     *
     * @return string
     */
    public function getIngredients()
    {
        return $this->ingredients;
    }

    /**
     * Set prix
     *
     * @param string $prix
     *
     * @return Pizza
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Pizza
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set supplements
     *
     * @param string $supplements
     *
     * @return Pizza
     */
    public function setSupplements($supplements)
    {
        $this->supplements = $supplements;

        return $this;
    }

    /**
     * Get supplements
     *
     * @return string
     */
    public function getSupplements()
    {
        return $this->supplements;
    }
    public function __toString() {
        return $this->getNomPizza();
    }

    public function jsonSerialize() {
        return array(
            "id"=>$this->id,
            "nom"=>$this->nomPizza
        );
    }
}
