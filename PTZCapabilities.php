<?php

class PTZCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param anyURI $XAddr
     * @param string $any
     */
    public function __construct($XAddr, $any)
    {
      $this->XAddr = $XAddr;
      $this->any = $any;
    }

    /**
     * @return anyURI
     */
    public function getXAddr()
    {
      return $this->XAddr;
    }

    /**
     * @param anyURI $XAddr
     * @return PTZCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
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
     * @return PTZCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
