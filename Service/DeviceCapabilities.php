<?php

class DeviceCapabilities
{

    /**
     * @var anyURI $XAddr
     */
    protected $XAddr = null;

    /**
     * @var NetworkCapabilities $Network
     */
    protected $Network = null;

    /**
     * @var SystemCapabilities $System
     */
    protected $System = null;

    /**
     * @var IOCapabilities $IO
     */
    protected $IO = null;

    /**
     * @var SecurityCapabilities $Security
     */
    protected $Security = null;

    /**
     * @var DeviceCapabilitiesExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param anyURI $XAddr
     */
    public function __construct($XAddr)
    {
      $this->XAddr = $XAddr;
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
     * @return DeviceCapabilities
     */
    public function setXAddr($XAddr)
    {
      $this->XAddr = $XAddr;
      return $this;
    }

    /**
     * @return NetworkCapabilities
     */
    public function getNetwork()
    {
      return $this->Network;
    }

    /**
     * @param NetworkCapabilities $Network
     * @return DeviceCapabilities
     */
    public function setNetwork($Network)
    {
      $this->Network = $Network;
      return $this;
    }

    /**
     * @return SystemCapabilities
     */
    public function getSystem()
    {
      return $this->System;
    }

    /**
     * @param SystemCapabilities $System
     * @return DeviceCapabilities
     */
    public function setSystem($System)
    {
      $this->System = $System;
      return $this;
    }

    /**
     * @return IOCapabilities
     */
    public function getIO()
    {
      return $this->IO;
    }

    /**
     * @param IOCapabilities $IO
     * @return DeviceCapabilities
     */
    public function setIO($IO)
    {
      $this->IO = $IO;
      return $this;
    }

    /**
     * @return SecurityCapabilities
     */
    public function getSecurity()
    {
      return $this->Security;
    }

    /**
     * @param SecurityCapabilities $Security
     * @return DeviceCapabilities
     */
    public function setSecurity($Security)
    {
      $this->Security = $Security;
      return $this;
    }

    /**
     * @return DeviceCapabilitiesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param DeviceCapabilitiesExtension $Extension
     * @return DeviceCapabilities
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
