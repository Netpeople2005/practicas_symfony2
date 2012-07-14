<?php

namespace Manuel\PersonasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Esta es una entidad creada a traves de la consola de symfony, para ello hice los 
 * siguientes pasos:
 * 
 * Pag. 302 del libro que pasó alberto.
 * 
 * generando las entidades a partir de la bd
 * 
 * php app/console doctrine:generate:convert --from-database yml src/Manuel/PersonasBundle/Resources/config/doctrine/
 * 
 * esto me genera unos yml en la ruta que pasé con la definicion de las tablas
 * 
 * luego estas dos para crear a entidad (osea este archivo)
 * 
 * php app/console doctrine:mapping:import ManuelPersonasBundle yml
 * php app/console doctrine:generate:entities ManuelPersonasBundle
 * 
 * Manuel\PersonasBundle\Entity\Personas
 */
class Personas
{

    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $nombre
     */
    private $nombre;

    /**
     * @var string $apellido
     */
    private $apellido;

    /**
     * @var string $direccion
     */
    private $direccion;

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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * Set apellido
     *
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
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
     * Devuelve el nombre completo de la persona
     *
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->nombre . ' ' . $this->apellido;
    }

    public function __toString()
    {
        return $this->getNombre();
    }
}