<?php

/**
 * @Entity()
 * @Table(name="compras")
 */
class Compra
{

    /**
     *
     * @var int
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    protected $id;
    
    /**
     *
     * @var Persona
     * @ManyToOne(targetEntity="Persona", inversedBy="compras")
     */
    protected $persona;

    /**
     *
     * @var array
     * @OneToMany(targetEntity="Descripcion", mappedBy="compra")
     */
    protected $descripciones;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->descripciones = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * Set persona
     *
     * @param \Persona $persona
     * @return Compra
     */
    public function setPersona(\Persona $persona = null)
    {
        $this->persona = $persona;
    
        return $this;
    }

    /**
     * Get persona
     *
     * @return \Persona 
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Add descripciones
     *
     * @param \Descripcion $descripciones
     * @return Compra
     */
    public function addDescripcione(\Descripcion $descripciones)
    {
        $this->descripciones[] = $descripciones;
        
        $descripciones->setCompra($this);
    
        return $this;
    }

    /**
     * Remove descripciones
     *
     * @param \Descripcion $descripciones
     */
    public function removeDescripcione(\Descripcion $descripciones)
    {
        $this->descripciones->removeElement($descripciones);
    }

    /**
     * Get descripciones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDescripciones()
    {
        return $this->descripciones;
    }
}