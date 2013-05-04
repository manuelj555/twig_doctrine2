<?php

/**
 * Description of Articulo
 *
 * @author manuel
 * @Table(name="articulos")
 * @Entity 
 * 
 */
class Articulo
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
     * @var type 
     */
    protected $nombre;
    protected $precio;
    protected $cantidad;
    protected $status;

}
