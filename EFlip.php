<?php

class EFlip
{

    /**
     * @var EFlipMode $Mode
     */
    protected $Mode = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param EFlipMode $Mode
     * @param string $any
     */
    public function __construct($Mode, $any)
    {
      $this->Mode = $Mode;
      $this->any = $any;
    }

    /**
     * @return EFlipMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param EFlipMode $Mode
     * @return EFlip
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
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
     * @return EFlip
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
