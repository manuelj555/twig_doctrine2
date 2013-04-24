<?php

/**
 * @Entity
 * @Table(name="personas")
 * @HasLifecycleCallbacks
 */
class Persona
{

    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;

    /**
     * @Column(type="string", length=50)
     */
    protected $nombre;

    /**
     * @Column(type="integer", length=2)
     */
    protected $edad;

    /**
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
     * @return Persona
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
     * Set edad
     *
     * @param integer $edad
     * @return Persona
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @PrePersist @PreUpdate
     */
    public function validate()
    {
        if (null == $this->nombre) {
            throw new LogicException("El campo Nombre no puede ser Nulo");
        }
        if (null == $this->edad) {
            throw new LogicException("El campo Edad no puede ser Nulo");
        }
        if (!is_numeric($this->edad)) {
            throw new LogicException("El campo Edad debe ser un número");
        }
    }

}