<?php

namespace Model;

class Cage {

    protected $id;
    protected $surface;

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
     * Get the value of surface
     */ 
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * Set the value of surface
     *
     * @return  self
     */ 
    public function setSurface($surface)
    {
        $this->surface = $surface;

        return $this;
    }
}