<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regalo
 *
 * @ORM\Table(name="regalo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RegaloRepository")
 */
class Regalo
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
     * @var float
     *
     * @ORM\Column(name="precio", type="float", nullable=true)
     */
    private $precio;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @ORM\ManyToOne(targetEntity="Destinatario")
     */
    private $destinatario;

    /**
     * @ORM\ManyToOne(targetEntity="Comprador")
     */
    private $comprador;

    /**
     * @ORM\Column(type="boolean")
     */
    private $entregado;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $estado;

    /**
     * @ORM\ManyToMany(targetEntity="Tienda", inversedBy="regalos")
     * @ORM\JoinTable(name="regalos_tiendas")
     */
    private $tiendas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entregado = false;
        $this->tiendas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * __toString
     *
     * @return string
     */
    public function __toString()
    {
        return $this->nombre;
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
     * Set precio
     *
     * @param float $precio
     *
     * @return Regalo
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Regalo
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Regalo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set destinatario
     *
     * @param string $destinatario
     *
     * @return Regalo
     */
    public function setDestinatario($destinatario)
    {
        $this->destinatario = $destinatario;

        return $this;
    }

    /**
     * Get destinatario
     *
     * @return string
     */
    public function getDestinatario()
    {
        return $this->destinatario;
    }

    /**
     * Set comprador
     *
     * @param string $comprador
     *
     * @return Regalo
     */
    public function setComprador($comprador)
    {
        $this->comprador = $comprador;

        return $this;
    }

    /**
     * Get comprador
     *
     * @return string
     */
    public function getComprador()
    {
        return $this->comprador;
    }

    /**
     * Set entregado
     *
     * @param boolean $entregado
     *
     * @return Regalo
     */
    public function setEntregado($entregado)
    {
        $this->entregado = $entregado;

        return $this;
    }

    /**
     * Get entregado
     *
     * @return boolean
     */
    public function getEntregado()
    {
        return $this->entregado;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Regalo
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Add tienda
     *
     * @param \AppBundle\Entity\Tienda $tienda
     *
     * @return Regalo
     */
    public function addTienda(\AppBundle\Entity\Tienda $tienda)
    {
        $this->tiendas[] = $tienda;

        return $this;
    }

    /**
     * Remove tienda
     *
     * @param \AppBundle\Entity\Tienda $tienda
     */
    public function removeTienda(\AppBundle\Entity\Tienda $tienda)
    {
        $this->tiendas->removeElement($tienda);
    }

    /**
     * Get tiendas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTiendas()
    {
        return $this->tiendas;
    }
}
