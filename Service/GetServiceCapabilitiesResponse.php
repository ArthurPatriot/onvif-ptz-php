<?php

class GetServiceCapabilitiesResponse
{

    /**
     * @var Capabilities $Capabilities
     */
    protected $Capabilities = null;

    /**
     * @param Capabilities $Capabilities
     */
    public function __construct($Capabilities)
    {
      $this->Capabilities = $Capabilities;
    }

    /**
     * @return Capabilities
     */
    public function getCapabilities()
    {
      return $this->Capabilities;
    }

    /**
     * @param Capabilities $Capabilities
     * @return GetServiceCapabilitiesResponse
     */
    public function setCapabilities($Capabilities)
    {
      $this->Capabilities = $Capabilities;
      return $this;
    }

}
