<?php

/**
 * Description of Articulo
 *
 * @author manuel
 * @Table(name="articulos")
 * @Entity 
 * 
 */
class Articulo implements K2\DataMapper\MapperInterface
{

    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

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
     * @Column(type="string", length=200, unique=true, nullable=false)
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
     * @var int
     * @Column(type="integer", length=1)
     */
    protected $status = self::STATUS_ACTIVE;

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
     * Set status
     *
     * @param integer $status
     * @return Articulo
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function map(\K2\Datamapper\MapperBuilder $builder, array $options = array())
    {
        $builder->add('nombre', array(FILTER_SANITIZE_STRING))
                ->add('cantidad', array(FILTER_SANITIZE_NUMBER_INT))
                ->add('precio', array(
                    FILTER_SANITIZE_NUMBER_FLOAT => array('flags' => FILTER_FLAG_ALLOW_FRACTION)
                ))
        ;
    }

}