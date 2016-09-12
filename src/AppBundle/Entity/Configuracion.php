<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuracion
 *
 * @ORM\Table(name="configuracion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConfiguracionRepository")
 */
class Configuracion
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
     * @ORM\Column(name="config1", type="string", length=255, nullable=true)
     */
    private $config1;

    /**
     * @var string
     *
     * @ORM\Column(name="config2", type="string", length=255, nullable=true)
     */
    private $config2;

    /**
     * @var string
     *
     * @ORM\Column(name="config3", type="string", length=255, nullable=true)
     */
    private $config3;


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
     * Set config1
     *
     * @param string $config1
     *
     * @return Configuracion
     */
    public function setConfig1($config1)
    {
        $this->config1 = $config1;

        return $this;
    }

    /**
     * Get config1
     *
     * @return string
     */
    public function getConfig1()
    {
        return $this->config1;
    }

    /**
     * Set config2
     *
     * @param string $config2
     *
     * @return Configuracion
     */
    public function setConfig2($config2)
    {
        $this->config2 = $config2;

        return $this;
    }

    /**
     * Get config2
     *
     * @return string
     */
    public function getConfig2()
    {
        return $this->config2;
    }

    /**
     * Set config3
     *
     * @param string $config3
     *
     * @return Configuracion
     */
    public function setConfig3($config3)
    {
        $this->config3 = $config3;

        return $this;
    }

    /**
     * Get config3
     *
     * @return string
     */
    public function getConfig3()
    {
        return $this->config3;
    }
}

