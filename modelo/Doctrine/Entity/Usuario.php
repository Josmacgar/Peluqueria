<?php
use Doctrine\ORM\Mapping as ORM;
require(dirname(__FILE__, 2) . '/Repository/UsuarioRepository.php');

/**
    @ORM\Entity(repositoryClass="UsuarioRepository")
*/
class Usuario {
    /**
        @ORM\Id
        @ORM\Column(type="integer")
        @ORM\GeneratedValue
    */
    private $idUsuario;
    
    /**
        @ORM\Column(type="string")
    */
    private $nombre;
    /**
        @ORM\Column(type="string")
    */
    private $email;
    /**
        @ORM\Column(type="string")
    */
    private $contraseña;
    /**
        @ORM\Column(type="integer")
    */
    private $telefono;
    /**
        @ORM\Column(type="integer")
    */
    private $baneado;
    /**
        @ORM\Column(type="string")
    */
    private $rol;

    function __construct(){
    }


    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }
    /**
     * Get the value of baneado
     */ 
    public function getBaneado()
    {
        return $this->baneado;
    }

    /**
     * Set the value of baneado
     *
     * @return  self
     */ 
    public function setBaneado($baneado)
    {
        $this->baneado = $baneado;

        return $this;
    }
    /**
     * Get the value of rol
     */ 
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set the value of rol
     *
     * @return  self
     */ 
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }
    /**
     * Get the value of contraseña
     */ 
    public function getContraseña()
    {
        return $this->contraseña;
    }

    /**
     * Set the value of contraseña
     *
     * @return  self
     */ 
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }
    /**
     * Get the value of idUsuario
     */ 
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */ 
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }
    
    public function __toString() {
        return "Usuarios: " 
            . $this->getNombre() . " - "
            . $this->getEmail() . " - "
            . $this->getContraseña() . " - "
            . $this->getTelefono() . " - "
            . $this->getBaneado() . " - "
            . $this->getRol() . " - ";
    }

}

