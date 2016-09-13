<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tienda
 *
 * @ORM\Table(name="tienda")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TiendaRepository")
 */
class Tienda
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="puntuacion", type="integer", nullable=true)
     */
    private $puntuacion;

    /**
     * @ORM\ManyToMany(targetEntity="Regalo", mappedBy="tiendas")
     */
    private $regalos;

    public function __toString()
    {
        return $this->getNombre();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Tienda
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set puntuacion
     *
     * @param integer $puntuacion
     *
     * @return Tienda
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }

    /**
     * Get puntuacion
     *
     * @return int
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->regalos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add regalo
     *
     * @param \AppBundle\Entity\Regalo $regalo
     *
     * @return Tienda
     */
    public function addRegalo(\AppBundle\Entity\Regalo $regalo)
    {
        $this->regalos[] = $regalo;
        $regalo->addTienda($this);

        return $this;
    }

    /**
     * Remove regalo
     *
     * @param \AppBundle\Entity\Regalo $regalo
     */
    public function removeRegalo(\AppBundle\Entity\Regalo $regalo)
    {
        $this->regalos->removeElement($regalo);
        $regalo->removeTienda($this);
    }

    /**
     * Get regalos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRegalos()
    {
        return $this->regalos;
    }
}
