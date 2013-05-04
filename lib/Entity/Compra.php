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
    
    protected $articulo;
}
