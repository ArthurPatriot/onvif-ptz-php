<?php

class Vector
{

    /**
     * @var float $x
     */
    protected $x = null;

    /**
     * @var float $y
     */
    protected $y = null;

    /**
     * @param float $x
     * @param float $y
     */
    public function __construct($x, $y)
    {
      $this->x = $x;
      $this->y = $y;
    }

    /**
     * @return float
     */
    public function getX()
    {
      return $this->x;
    }

    /**
     * @param float $x
     * @return Vector
     */
    public function setX($x)
    {
      $this->x = $x;
      return $this;
    }

    /**
     * @return float
     */
    public function getY()
    {
      return $this->y;
    }

    /**
     * @param float $y
     * @return Vector
     */
    public function setY($y)
    {
      $this->y = $y;
      return $this;
    }

}
