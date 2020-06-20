<?php

class NetworkCapabilities
{

    /**
     * @var boolean $IPFilter
     */
    protected $IPFilter = null;

    /**
     * @var boolean $ZeroConfiguration
     */
    protected $ZeroConfiguration = null;

    /**
     * @var boolean $IPVersion6
     */
    protected $IPVersion6 = null;

    /**
     * @var boolean $DynDNS
     */
    protected $DynDNS = null;

    /**
     * @var NetworkCapabilitiesExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getIPFilter()
    {
      return $this->IPFilter;
    }

    /**
     * @param boolean $IPFilter
     * @return NetworkCapabilities
     */
    public function setIPFilter($IPFilter)
    {
      $this->IPFilter = $IPFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZeroConfiguration()
    {
      return $this->ZeroConfiguration;
    }

    /**
     * @param boolean $ZeroConfiguration
     * @return NetworkCapabilities
     */
    public function setZeroConfiguration($ZeroConfiguration)
    {
      $this->ZeroConfiguration = $ZeroConfiguration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIPVersion6()
    {
      return $this->IPVersion6;
    }

    /**
     * @param boolean $IPVersion6
     * @return NetworkCapabilities
     */
    public function setIPVersion6($IPVersion6)
    {
      $this->IPVersion6 = $IPVersion6;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDynDNS()
    {
      return $this->DynDNS;
    }

    /**
     * @param boolean $DynDNS
     * @return NetworkCapabilities
     */
    public function setDynDNS($DynDNS)
    {
      $this->DynDNS = $DynDNS;
      return $this;
    }

    /**
     * @return NetworkCapabilitiesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param NetworkCapabilitiesExtension $Extension
     * @return NetworkCapabilities
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
