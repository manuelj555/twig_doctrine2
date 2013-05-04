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
     * @ManyToMany(targetEntity="Articulo")
     */
    protected $articulos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articulos = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add articulos
     *
     * @param \Articulo $articulos
     * @return Compra
     */
    public function addArticulo(\Articulo $articulos)
    {
        $this->articulos[] = $articulos;
    
        return $this;
    }

    /**
     * Remove articulos
     *
     * @param \Articulo $articulos
     */
    public function removeArticulo(\Articulo $articulos)
    {
        $this->articulos->removeElement($articulos);
    }

    /**
     * Get articulos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticulos()
    {
        return $this->articulos;
    }
}