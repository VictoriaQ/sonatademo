<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destinatario
 *
 * @ORM\Table(name="destinatario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DestinatarioRepository")
 */
class Destinatario
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
     * @orm\column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @orm\column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

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
     * @return Destinatario
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
     * @return Destinatario
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
}
