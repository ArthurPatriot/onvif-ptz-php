<?php

class DefoggingOptions
{

    /**
     * @var string[] $Mode
     */
    protected $Mode = null;

    /**
     * @var boolean $Level
     */
    protected $Level = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string[] $Mode
     * @param boolean $Level
     * @param string $any
     */
    public function __construct(array $Mode, $Level, $any)
    {
      $this->Mode = $Mode;
      $this->Level = $Level;
      $this->any = $any;
    }

    /**
     * @return string[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param string[] $Mode
     * @return DefoggingOptions
     */
    public function setMode(array $Mode)
    {
      $this->Mode = $Mode;
      return $this;
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
     * @return DefoggingOptions
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
     * @return DefoggingOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
