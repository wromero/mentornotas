<?php

namespace Jazzyweb\AulasMentor\NotasFrontendBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Publicidad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Jazzyweb\AulasMentor\NotasFrontendBundle\Entity\PublicidadRepository")
 */
class Publicidad
{
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="string", length=255)
     */
    private $texto;

    /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
    * @Assert\File(maxSize="6000000")
    */
    public $file;
 
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
     * @return Publicidad
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
     * Set texto
     *
     * @param string $texto
     * @return Publicidad
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
     * Set path
     *
     * @param string $path
     * @return Publicidad
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
    
    public function getAbsolutePath() {
     return null === $this->path ? null : $this->getUploadRootDir() . '/' . $this->path;
 }

 public function getWebPath() {
     return null === $this->path ? null : $this->getUploadDir() . '/' . $this->path;
 }

 protected function getUploadRootDir() {
     // the absolute directory path where uploaded documents should be saved
     return __DIR__ . '/../../../../../web/' . $this->getUploadDir();
 }

 protected function getUploadDir() {
     // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
     return 'uploads/publicidad';
 }

 public function upload() {
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

 public function __toString()
 {
     return $this->getNombre();
 }
    
}
