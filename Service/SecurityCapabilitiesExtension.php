<?php

class SecurityCapabilitiesExtension
{

    /**
     * @var boolean $TLS10
     */
    protected $TLS10 = null;

    /**
     * @var SecurityCapabilitiesExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param boolean $TLS10
     */
    public function __construct($TLS10)
    {
      $this->TLS10 = $TLS10;
    }

    /**
     * @return boolean
     */
    public function getTLS10()
    {
      return $this->TLS10;
    }

    /**
     * @param boolean $TLS10
     * @return SecurityCapabilitiesExtension
     */
    public function setTLS10($TLS10)
    {
      $this->TLS10 = $TLS10;
      return $this;
    }

    /**
     * @return SecurityCapabilitiesExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SecurityCapabilitiesExtension2 $Extension
     * @return SecurityCapabilitiesExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
