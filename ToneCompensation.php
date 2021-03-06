<?php

class ToneCompensation
{

    /**
     * @var string $Mode
     */
    protected $Mode = null;

    /**
     * @var float $Level
     */
    protected $Level = null;

    /**
     * @var ToneCompensationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param string $Mode
     */
    public function __construct($Mode)
    {
      $this->Mode = $Mode;
    }

    /**
     * @return string
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param string $Mode
     * @return ToneCompensation
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
     * @return ToneCompensation
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return ToneCompensationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ToneCompensationExtension $Extension
     * @return ToneCompensation
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
