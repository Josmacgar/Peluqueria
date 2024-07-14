<?php

use Doctrine\ORM\Mapping as ORM;

require(dirname(__FILE__, 2) . '/Repository/CitasRepository.php');
/**
    @ORM\Entity(repositoryClass="CitasRepository")
 */
class Citas
{
    /**
        @ORM\Id
        @ORM\Column(type="integer")
        @ORM\GeneratedValue
     */
    private $idCitas;
    /**
        @ORM\Column(type="string")
     */
    private $titulo;
    /**
        @ORM\Column(type="string")
     */
    private $estado;
    /**
        @ORM\Column(type="datetime")
     */
    private $fecha_cita;
    /**
        @ORM\ManyToOne(targetEntity="usuario")
        @ORM\JoinColumn(name="usuario",referencedColumnName="idUsuario")
     */
    private $usuario;


    /**
     * Get the value of idCitas
     */
    public function getIdCitas()
    {
        return $this->idCitas;
    }

    /**
     * Set the value of idCitas
     *
     * @return  self
     */
    public function setIdCitas($idCitas)
    {
        $this->idCitas = $idCitas;

        return $this;
    }

        /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     *
     * @return  self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get the value of usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set the value of usuario
     *
     * @return  self
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }
    /**
     * Get the value of fecha_cita
     */
    public function getFecha_cita()
    {
        return $this->fecha_cita;
    }

    /**
     * Set the value of fecha_cita
     *
     * @return  self
     */
    public function setFecha_cita($fecha_cita)
    {
        $this->fecha_cita = $fecha_cita;

        return $this;
    }
    public function __toString()
    {
        return "Citas: "
            .$this->getTitulo() . " - "
            . $this->getEstado() . " - "
            . $this->getFecha_cita() . " - "
            . $this->getUsuario() . " - ";
    }


}
