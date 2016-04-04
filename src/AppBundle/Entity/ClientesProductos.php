<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesProductos
 *
 * @ORM\Table(name="clientes_productos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientesProductosRepository")
 */
class ClientesProductos
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
     * @ORM\Column(name="precio", type="decimal", precision=10, scale=2)
     */
    private $precio;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="smallint")
     */
    private $cantidad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_compra", type="datetime")
     */
    private $fechaCompra;

    /**
     * @var string
     *
     * @ORM\Column(name="detalles", type="string", length=140)
     */
    private $detalles;

    /**
     * @ORM\ManyToOne(targetEntity="Clientes", inversedBy="clientesProductos")
     */
    private $clientes;

    /**
     * @ORM\ManyToOne(targetEntity="Productos", inversedBy="clientesProductos")
     */
    private $productos;


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
     * Set precio
     *
     * @param string $precio
     * @return ClientesProductos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return ClientesProductos
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
     * Set fechaCompra
     *
     * @param \DateTime $fechaCompra
     * @return ClientesProductos
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    /**
     * Get fechaCompra
     *
     * @return \DateTime
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * Set detalles
     *
     * @param string $detalles
     * @return ClientesProductos
     */
    public function setDetalles($detalles)
    {
        $this->detalles = $detalles;

        return $this;
    }

    /**
     * Get detalles
     *
     * @return string
     */
    public function getDetalles()
    {
        return $this->detalles;
    }

    /**
     * Set clientes
     *
     * @param \AppBundle\Entity\Clientes $clientes
     * @return ClientesProductos
     */
    public function setClientes(\AppBundle\Entity\Clientes $clientes = null)
    {
        $this->clientes = $clientes;

        return $this;
    }

    /**
     * Get clientes
     *
     * @return \AppBundle\Entity\Clientes 
     */
    public function getClientes()
    {
        return $this->clientes;
    }

    /**
     * Set productos
     *
     * @param \AppBundle\Entity\Productos $productos
     * @return ClientesProductos
     */
    public function setProductos(\AppBundle\Entity\Productos $productos = null)
    {
        $this->productos = $productos;

        return $this;
    }

    /**
     * Get productos
     *
     * @return \AppBundle\Entity\Productos 
     */
    public function getProductos()
    {
        return $this->productos;
    }
}
