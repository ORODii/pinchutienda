<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 *
 * @ORM\Table(name="clientes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientesRepository")
 */
class Clientes
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
     * @ORM\Column(name="nombre", type="string", length=45)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=45)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20)
     */
    private $telefono;

    /**
     * @ORM\ManyToOne(targetEntity="Departamentos", inversedBy="clientes")
     */
    private $departamentos;

    /**
     * @ORM\OneToMany(targetEntity="ClientesProductos", mappedBy="clientes")
     */
    private $clientesProductos;

    public function __construct()
    {
        $this->clientesProductos = new ArrayCollection();
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
     * @return Clientes
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Clientes
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Clientes
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Clientes
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set departamentos
     *
     * @param \AppBundle\Entity\Departamentos $departamentos
     * @return Clientes
     */
    public function setDepartamentos(\AppBundle\Entity\Departamentos $departamentos = null)
    {
        $this->departamentos = $departamentos;

        return $this;
    }

    /**
     * Get departamentos
     *
     * @return \AppBundle\Entity\Departamentos
     */
    public function getDepartamentos()
    {
        return $this->departamentos;
    }

    /**
     * Add clientesProductos
     *
     * @param \AppBundle\Entity\ClientesProductos $clientesProductos
     * @return Clientes
     */
    public function addClientesProducto(\AppBundle\Entity\ClientesProductos $clientesProductos)
    {
        $this->clientesProductos[] = $clientesProductos;

        return $this;
    }

    /**
     * Remove clientesProductos
     *
     * @param \AppBundle\Entity\ClientesProductos $clientesProductos
     */
    public function removeClientesProducto(\AppBundle\Entity\ClientesProductos $clientesProductos)
    {
        $this->clientesProductos->removeElement($clientesProductos);
    }

    /**
     * Get clientesProductos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClientesProductos()
    {
        return $this->clientesProductos;
    }
}
