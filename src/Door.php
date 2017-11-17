<?php
namespace App;

class Door
{
    private $open;
    private $material;

    public function getState()
    {
        return $this->open;
    }

    public function setState($value)
    {
        $this->open = $value;
    }

    public function getMaterial()
    {
        return $this->material;
    }

    public function setMaterial($material)
    {
        $this->material = $material;
    }
}
