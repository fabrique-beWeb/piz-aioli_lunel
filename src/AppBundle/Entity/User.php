<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table(name="pizAioli_fos_user")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Get id
     *
     * @return int
     */
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    

    /**
     * @var string
     *
     * @ORM\Column(name="avatar", type="string", length=255)
     */
    private $avatar;
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getTelephone() {
        return $this->telephone;
    }

    

    function getAvatar() {
        return $this->avatar;
    }

    function getPizzasFavoritesListePizza() {
        return $this->pizzasFavoritesListePizza;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    

    function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    function setPizzasFavoritesListePizza($pizzasFavoritesListePizza) {
        $this->pizzasFavoritesListePizza = $pizzasFavoritesListePizza;
    }


    
}