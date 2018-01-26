<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="titles")
 * @ORM\Entity(repositoryClass="App\Repository\TitleRepository")
 */
class Title
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $about;

    /**
     * getName
     * @return string name
     */
    public function getName(){
    	return $this->name;
    }

    /**
     * setName
     * @param string name
     * @return src\Entity\Title
     */
    public function setName(string $name){
    	$this->name = $name;
    	return $this;
    }

     /**
     * getAbout
     * @return string about
     */
    public function getAbout(){
    	return $this->about;
    }

    /**
     * setAbout
     * @param string about
     * @return src\Entity\Title
     */
    public function setAbout(string $about){
    	$this->about = $about;
    	return $this;
    }

    // add your own fields
}
