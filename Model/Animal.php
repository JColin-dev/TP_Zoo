<?php 

namespace Model;

class Animal {

    protected $id;
    protected $nom;
    protected $age;
    protected $male;
    protected $idCage;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of male
     */ 
    public function getMale()
    {
        return $this->male;
    }

    /**
     * Set the value of male
     *
     * @return  self
     */ 
    public function setMale($male)
    {
        $this->male = $male;

        return $this;
    }

    /**
     * Get the value of idCage
     */ 
    public function getIdCage()
    {
        return $this->idCage;
    }

    /**
     * Set the value of idCage
     *
     * @return  self
     */ 
    public function setIdCage($idCage)
    {
        $this->idCage = $idCage;

        return $this;
    }
}