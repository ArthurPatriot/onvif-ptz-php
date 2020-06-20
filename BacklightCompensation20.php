<?php

class BacklightCompensation20
{

    /**
     * @var BacklightCompensationMode $Mode
     */
    protected $Mode = null;

    /**
     * @var float $Level
     */
    protected $Level = null;

    /**
     * @param BacklightCompensationMode $Mode
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return BacklightCompensationMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param BacklightCompensationMode $Mode
     * @return BacklightCompensation20
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
     * @return BacklightCompensation20
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
