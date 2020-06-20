<?php

class Color
{

    /**
     * @var float $X
     */
    protected $X = null;

    /**
     * @var float $Y
     */
    protected $Y = null;

    /**
     * @var float $Z
     */
    protected $Z = null;

    /**
     * @var anyURI $Colorspace
     */
    protected $Colorspace = null;

    /**
     * @param float $X
     * @param float $Y
     * @param float $Z
     * @param anyURI $Colorspace
     */
    public function __construct($X, $Y, $Z, $Colorspace)
    {
      $this->X = $X;
      $this->Y = $Y;
      $this->Z = $Z;
      $this->Colorspace = $Colorspace;
    }

    /**
     * @return float
     */
    public function getX()
    {
      return $this->X;
    }

    /**
     * @param float $X
     * @return Color
     */
    public function setX($X)
    {
      $this->X = $X;
      return $this;
    }

    /**
     * @return float
     */
    public function getY()
    {
      return $this->Y;
    }

    /**
     * @param float $Y
     * @return Color
     */
    public function setY($Y)
    {
      $this->Y = $Y;
      return $this;
    }

    /**
     * @return float
     */
    public function getZ()
    {
      return $this->Z;
    }

    /**
     * @param float $Z
     * @return Color
     */
    public function setZ($Z)
    {
      $this->Z = $Z;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getColorspace()
    {
      return $this->Colorspace;
    }

    /**
     * @param anyURI $Colorspace
     * @return Color
     */
    public function setColorspace($Colorspace)
    {
      $this->Colorspace = $Colorspace;
      return $this;
    }

}
