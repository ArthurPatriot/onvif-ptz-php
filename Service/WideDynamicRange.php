<?php

class WideDynamicRange
{

    /**
     * @var WideDynamicMode $Mode
     */
    protected $Mode = null;

    /**
     * @var float $Level
     */
    protected $Level = null;

    /**
     * @param WideDynamicMode $Mode
     * @param float $Level
     */
    public function __construct($Mode, $Level)
    {
      $this->Mode = $Mode;
      $this->Level = $Level;
    }

    /**
     * @return WideDynamicMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param WideDynamicMode $Mode
     * @return WideDynamicRange
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return float
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param float $Level
     * @return WideDynamicRange
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
