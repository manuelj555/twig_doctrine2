<?php

/**
 * Description of Articulo
 *
 * @author manuel
 * @Table(name="descripciones")
 * @Entity 
 * 
 */
class Descripcion
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
     * @var string
     * @Column(type="string", length=200, nullable=false)
     */
    protected $nombre;

    /**
     *
     * @var float
     * @Column(type="float", length=11)
     */
    protected $precio;

    /**
     *
     * @var int
     * @Column(type="integer", length=11)
     */
    protected $cantidad;
    
    /**
     *
     * @var Compra 
     * @ManyToOne(targetEntity="Compra")
     */
    protected $compra;

    public function __construct(Articulo $art = null, $cantidad = null)
    {
        if ($art) {
            $this->setNombre($art->getNombre())
                    ->setCantidad($cantidad)
                    ->setPrecio($art->getPrecio());
        }
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
     * Set nombre
     *
     * @param string $nombre
     * @return Articulo
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
     * Set precio
     *
     * @param integer $precio
     * @return Articulo
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return Articulo
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }


    /**
     * Set compra
     *
     * @param \Compra $compra
     * @return Descripcion
     */
    public function setCompra(\Compra $compra = null)
    {
        $this->compra = $compra;
    
        return $this;
    }

    /**
     * Get compra
     *
     * @return \Compra 
     */
    public function getCompra()
    {
        return $this->compra;
    }
}