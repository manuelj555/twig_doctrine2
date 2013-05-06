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
     * @Column(type="string", length=15)
     */
    protected $cedula;

    /**
     * @Column(type="string", length=50)
     */
    protected $nombre;

    /**
     * @Column(type="integer", length=2)
     */
    protected $edad;

    /**
     *
     * @var array
     * @OneToMany(targetEntity="Compra", mappedBy="persona")
     */
    protected $compras;

    /**
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function getCedula()
    {
        return $this->cedula;
    }

    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->compras = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add compras
     *
     * @param \Compra $compras
     * @return Persona
     */
    public function addCompra(\Compra $compras)
    {
        $this->compras[] = $compras;

        return $this;
    }

    /**
     * Remove compras
     *
     * @param \Compra $compras
     */
    public function removeCompra(\Compra $compras)
    {
        $this->compras->removeElement($compras);
    }

    /**
     * Get compras
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCompras()
    {
        return $this->compras;
    }

}