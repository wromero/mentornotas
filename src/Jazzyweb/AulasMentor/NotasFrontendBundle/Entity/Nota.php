<?php

namespace Jazzyweb\AulasMentor\NotasFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nota
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\NotaRepository")
 */
class Nota
{
    /**
  * @ORM\ManyToOne(targetEntity="Usuario")
  */
 private $usuario;
 /**
  * @ORM\ManyToMany(targetEntity="Etiqueta", inversedBy="notas")
  */
 private $etiquetas;

 public function __construct()
 {
     $this->etiquetas = new ArrayCollection();
 }
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Length(max = "30")
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", nullable=true)
     */
    private $texto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255, nullable=true)
     */
    private $path;

    /**
    * @var string
    * 
    * @Assert\File(maxSize="6000000")
    */
    private $file;
    
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
     * Set titulo
     *
     * @param string $titulo
     * @return Nota
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set texto
     *
     * @param string $texto
     * @return Nota
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;

        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Nota
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Nota
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
    
    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }
    
    /**
     * Set file
     *
     * @param string $file
     * @return Nota
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Set usuario
     *
     * @param \Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario $usuario
     * @return Nota
     */
    public function setUsuario(\Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Add etiquetas
     *
     * @param \Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Etiqueta $etiquetas
     * @return Nota
     */
    public function addEtiqueta(\Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Etiqueta $etiquetas)
    {
        $this->etiquetas[] = $etiquetas;

        return $this;
    }

    /**
     * Remove etiquetas
     *
     * @param \Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Etiqueta $etiquetas
     */
    public function removeEtiqueta(\Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Etiqueta $etiquetas)
    {
        $this->etiquetas->removeElement($etiquetas);
    }

    /**
     * Get etiquetas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtiquetas()
    {
        return $this->etiquetas;
    }
    public function getAbsolutePath()
    {
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__.'/../../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
        return 'uploads/documents';
    }

    public function upload()
    {
      // the file property can be empty if the field is not required
      if (null === $this->file) {
      return;
      }

      // we use the original file name here but you should
      // sanitize it at least to avoid any security issues

      // move takes the target directory and then the target filename to move to
      $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

      // set the path property to the filename where you'ved saved the file
      $this->path = $this->file->getClientOriginalName();

      // clean up the file property as you won't need it anymore
      $this->file = null;
    }
}
