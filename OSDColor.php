<?php

class OSDColor
{

    /**
     * @var Color $Color
     */
    protected $Color = null;

    /**
     * @var int $Transparent
     */
    protected $Transparent = null;

    /**
     * @param Color $Color
     * @param int $Transparent
     */
    public function __construct($Color, $Transparent)
    {
      $this->Color = $Color;
      $this->Transparent = $Transparent;
    }

    /**
     * @return Color
     */
    public function getColor()
    {
      return $this->Color;
    }

    /**
     * @param Color $Color
     * @return OSDColor
     */
    public function setColor($Color)
    {
      $this->Color = $Color;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransparent()
    {
      return $this->Transparent;
    }

    /**
     * @param int $Transparent
     * @return OSDColor
     */
    public function setTransparent($Transparent)
    {
      $this->Transparent = $Transparent;
      return $this;
    }

}
