<?php

class SystemCapabilities
{

    /**
     * @var boolean $DiscoveryResolve
     */
    protected $DiscoveryResolve = null;

    /**
     * @var boolean $DiscoveryBye
     */
    protected $DiscoveryBye = null;

    /**
     * @var boolean $RemoteDiscovery
     */
    protected $RemoteDiscovery = null;

    /**
     * @var boolean $SystemBackup
     */
    protected $SystemBackup = null;

    /**
     * @var boolean $SystemLogging
     */
    protected $SystemLogging = null;

    /**
     * @var boolean $FirmwareUpgrade
     */
    protected $FirmwareUpgrade = null;

    /**
     * @var OnvifVersion[] $SupportedVersions
     */
    protected $SupportedVersions = null;

    /**
     * @var SystemCapabilitiesExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param boolean $DiscoveryResolve
     * @param boolean $DiscoveryBye
     * @param boolean $RemoteDiscovery
     * @param boolean $SystemBackup
     * @param boolean $SystemLogging
     * @param boolean $FirmwareUpgrade
     * @param OnvifVersion[] $SupportedVersions
     */
    public function __construct($DiscoveryResolve, $DiscoveryBye, $RemoteDiscovery, $SystemBackup, $SystemLogging, $FirmwareUpgrade, array $SupportedVersions)
    {
      $this->DiscoveryResolve = $DiscoveryResolve;
      $this->DiscoveryBye = $DiscoveryBye;
      $this->RemoteDiscovery = $RemoteDiscovery;
      $this->SystemBackup = $SystemBackup;
      $this->SystemLogging = $SystemLogging;
      $this->FirmwareUpgrade = $FirmwareUpgrade;
      $this->SupportedVersions = $SupportedVersions;
    }

    /**
     * @return boolean
     */
    public function getDiscoveryResolve()
    {
      return $this->DiscoveryResolve;
    }

    /**
     * @param boolean $DiscoveryResolve
     * @return SystemCapabilities
     */
    public function setDiscoveryResolve($DiscoveryResolve)
    {
      $this->DiscoveryResolve = $DiscoveryResolve;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDiscoveryBye()
    {
      return $this->DiscoveryBye;
    }

    /**
     * @param boolean $DiscoveryBye
     * @return SystemCapabilities
     */
    public function setDiscoveryBye($DiscoveryBye)
    {
      $this->DiscoveryBye = $DiscoveryBye;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRemoteDiscovery()
    {
      return $this->RemoteDiscovery;
    }

    /**
     * @param boolean $RemoteDiscovery
     * @return SystemCapabilities
     */
    public function setRemoteDiscovery($RemoteDiscovery)
    {
      $this->RemoteDiscovery = $RemoteDiscovery;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSystemBackup()
    {
      return $this->SystemBackup;
    }

    /**
     * @param boolean $SystemBackup
     * @return SystemCapabilities
     */
    public function setSystemBackup($SystemBackup)
    {
      $this->SystemBackup = $SystemBackup;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSystemLogging()
    {
      return $this->SystemLogging;
    }

    /**
     * @param boolean $SystemLogging
     * @return SystemCapabilities
     */
    public function setSystemLogging($SystemLogging)
    {
      $this->SystemLogging = $SystemLogging;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFirmwareUpgrade()
    {
      return $this->FirmwareUpgrade;
    }

    /**
     * @param boolean $FirmwareUpgrade
     * @return SystemCapabilities
     */
    public function setFirmwareUpgrade($FirmwareUpgrade)
    {
      $this->FirmwareUpgrade = $FirmwareUpgrade;
      return $this;
    }

    /**
     * @return OnvifVersion[]
     */
    public function getSupportedVersions()
    {
      return $this->SupportedVersions;
    }

    /**
     * @param OnvifVersion[] $SupportedVersions
     * @return SystemCapabilities
     */
    public function setSupportedVersions(array $SupportedVersions)
    {
      $this->SupportedVersions = $SupportedVersions;
      return $this;
    }

    /**
     * @return SystemCapabilitiesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SystemCapabilitiesExtension $Extension
     * @return SystemCapabilities
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
