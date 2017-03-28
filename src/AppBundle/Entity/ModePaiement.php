<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;



/**
 * ModePaiement
 *
 * @ORM\Table(name="pizAioli_mode_paiement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModePaiementRepository")
 */
class ModePaiement
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
     * @ORM\Column(name="mode", type="string", length=255)
     */
    private $mode;


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
     * Set mode
     *
     * @param string $mode
     *
     * @return ModePaiement
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }
    public function __toString() {
        return $this->getMode();
    }

}

