<?php

class Dot11AvailableNetworks
{

    /**
     * @var Dot11SSIDType $SSID
     */
    protected $SSID = null;

    /**
     * @var string $BSSID
     */
    protected $BSSID = null;

    /**
     * @var Dot11AuthAndMangementSuite[] $AuthAndMangementSuite
     */
    protected $AuthAndMangementSuite = null;

    /**
     * @var Dot11Cipher[] $PairCipher
     */
    protected $PairCipher = null;

    /**
     * @var Dot11Cipher[] $GroupCipher
     */
    protected $GroupCipher = null;

    /**
     * @var Dot11SignalStrength $SignalStrength
     */
    protected $SignalStrength = null;

    /**
     * @var Dot11AvailableNetworksExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param Dot11SSIDType $SSID
     */
    public function __construct($SSID)
    {
      $this->SSID = $SSID;
    }

    /**
     * @return Dot11SSIDType
     */
    public function getSSID()
    {
      return $this->SSID;
    }

    /**
     * @param Dot11SSIDType $SSID
     * @return Dot11AvailableNetworks
     */
    public function setSSID($SSID)
    {
      $this->SSID = $SSID;
      return $this;
    }

    /**
     * @return string
     */
    public function getBSSID()
    {
      return $this->BSSID;
    }

    /**
     * @param string $BSSID
     * @return Dot11AvailableNetworks
     */
    public function setBSSID($BSSID)
    {
      $this->BSSID = $BSSID;
      return $this;
    }

    /**
     * @return Dot11AuthAndMangementSuite[]
     */
    public function getAuthAndMangementSuite()
    {
      return $this->AuthAndMangementSuite;
    }

    /**
     * @param Dot11AuthAndMangementSuite[] $AuthAndMangementSuite
     * @return Dot11AvailableNetworks
     */
    public function setAuthAndMangementSuite(array $AuthAndMangementSuite = null)
    {
      $this->AuthAndMangementSuite = $AuthAndMangementSuite;
      return $this;
    }

    /**
     * @return Dot11Cipher[]
     */
    public function getPairCipher()
    {
      return $this->PairCipher;
    }

    /**
     * @param Dot11Cipher[] $PairCipher
     * @return Dot11AvailableNetworks
     */
    public function setPairCipher(array $PairCipher = null)
    {
      $this->PairCipher = $PairCipher;
      return $this;
    }

    /**
     * @return Dot11Cipher[]
     */
    public function getGroupCipher()
    {
      return $this->GroupCipher;
    }

    /**
     * @param Dot11Cipher[] $GroupCipher
     * @return Dot11AvailableNetworks
     */
    public function setGroupCipher(array $GroupCipher = null)
    {
      $this->GroupCipher = $GroupCipher;
      return $this;
    }

    /**
     * @return Dot11SignalStrength
     */
    public function getSignalStrength()
    {
      return $this->SignalStrength;
    }

    /**
     * @param Dot11SignalStrength $SignalStrength
     * @return Dot11AvailableNetworks
     */
    public function setSignalStrength($SignalStrength)
    {
      $this->SignalStrength = $SignalStrength;
      return $this;
    }

    /**
     * @return Dot11AvailableNetworksExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param Dot11AvailableNetworksExtension $Extension
     * @return Dot11AvailableNetworks
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
