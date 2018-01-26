<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Employees")
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 */
class Employee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $about;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Title")
     * @ORM\JoinColumn(nullable=false)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $picture;


    /**
     * getId
     * @return integer id
     */
    public function getId(){
    	return $this->id;
    }

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
     * @return src\Entity\Employee
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
     * @return src\Entity\Employee
     */
    public function setAbout(string $about){
    	$this->about = $about;
    	return $this;
    }

     /**
     * getPicture
     * @return string picture
     */
    public function getPicture(){
    	return $this->picture;
    }

    /**
     * setPicture
     * @param string picture
     * @return src\Entity\Employee
     */
    public function setPicture(string $picture){
    	$this->picture = $picture;
    	return $this;
    }

     /**
     * getTitle
     * @return src\Entity\Title title
     */
    public function getTitle(){
    	return $this->title;
    }

    /**
     * setTitle
     * @param Title title
     * @return src\Entity\Employee
     */
    public function setTitle(src\Entity\Title $title){
    	$this->title = $title;
    	return $this;
    }


    // add your own fields
}
