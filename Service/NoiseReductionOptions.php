<?php

class NoiseReductionOptions
{

    /**
     * @var boolean $Level
     */
    protected $Level = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param boolean $Level
     * @param string $any
     */
    public function __construct($Level, $any)
    {
      $this->Level = $Level;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param boolean $Level
     * @return NoiseReductionOptions
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return NoiseReductionOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
