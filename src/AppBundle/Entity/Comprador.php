<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comprador
 *
 * @ORM\Table(name="comprador")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CompradorRepository")
 */
class Comprador
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
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codigoPostal;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $localidad;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pais;

    /**
     * @ORM\OneToMany(targetEntity="Pago", mappedBy="comprador", cascade={"persist"})
     */
    private $pagos;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Comprador
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Comprador
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Get nombre completo
     *
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->nombre.' '.$this->apellidos;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pagos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Comprador
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Comprador
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     *
     * @return Comprador
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Comprador
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Comprador
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Add pago
     *
     * @param \AppBundle\Entity\Pago $pago
     *
     * @return Comprador
     */
    public function addPago(\AppBundle\Entity\Pago $pago)
    {
        $this->pagos[] = $pago;

        return $this;
    }

    /**
     * Remove pago
     *
     * @param \AppBundle\Entity\Pago $pago
     */
    public function removePago(\AppBundle\Entity\Pago $pago)
    {
        $this->pagos->removeElement($pago);
    }

    /**
     * Get pagos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPagos()
    {
        return $this->pagos;
    }
}
