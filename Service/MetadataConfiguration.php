<?php

class MetadataConfiguration extends ConfigurationEntity
{

    /**
     * @var PTZFilter $PTZStatus
     */
    protected $PTZStatus = null;

    /**
     * @var EventSubscription $Events
     */
    protected $Events = null;

    /**
     * @var boolean $Analytics
     */
    protected $Analytics = null;

    /**
     * @var MulticastConfiguration $Multicast
     */
    protected $Multicast = null;

    /**
     * @var duration $SessionTimeout
     */
    protected $SessionTimeout = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var AnalyticsEngineConfiguration $AnalyticsEngineConfiguration
     */
    protected $AnalyticsEngineConfiguration = null;

    /**
     * @var MetadataConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var string $CompressionType
     */
    protected $CompressionType = null;

    /**
     * @var boolean $GeoLocation
     */
    protected $GeoLocation = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param MulticastConfiguration $Multicast
     * @param duration $SessionTimeout
     * @param string $any
     * @param string $CompressionType
     * @param boolean $GeoLocation
     */
    public function __construct($Name, $UseCount, $token, $Multicast, $SessionTimeout, $any, $CompressionType, $GeoLocation)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->Multicast = $Multicast;
      $this->SessionTimeout = $SessionTimeout;
      $this->any = $any;
      $this->CompressionType = $CompressionType;
      $this->GeoLocation = $GeoLocation;
    }

    /**
     * @return PTZFilter
     */
    public function getPTZStatus()
    {
      return $this->PTZStatus;
    }

    /**
     * @param PTZFilter $PTZStatus
     * @return MetadataConfiguration
     */
    public function setPTZStatus($PTZStatus)
    {
      $this->PTZStatus = $PTZStatus;
      return $this;
    }

    /**
     * @return EventSubscription
     */
    public function getEvents()
    {
      return $this->Events;
    }

    /**
     * @param EventSubscription $Events
     * @return MetadataConfiguration
     */
    public function setEvents($Events)
    {
      $this->Events = $Events;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAnalytics()
    {
      return $this->Analytics;
    }

    /**
     * @param boolean $Analytics
     * @return MetadataConfiguration
     */
    public function setAnalytics($Analytics)
    {
      $this->Analytics = $Analytics;
      return $this;
    }

    /**
     * @return MulticastConfiguration
     */
    public function getMulticast()
    {
      return $this->Multicast;
    }

    /**
     * @param MulticastConfiguration $Multicast
     * @return MetadataConfiguration
     */
    public function setMulticast($Multicast)
    {
      $this->Multicast = $Multicast;
      return $this;
    }

    /**
     * @return duration
     */
    public function getSessionTimeout()
    {
      return $this->SessionTimeout;
    }

    /**
     * @param duration $SessionTimeout
     * @return MetadataConfiguration
     */
    public function setSessionTimeout($SessionTimeout)
    {
      $this->SessionTimeout = $SessionTimeout;
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
     * @return MetadataConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return AnalyticsEngineConfiguration
     */
    public function getAnalyticsEngineConfiguration()
    {
      return $this->AnalyticsEngineConfiguration;
    }

    /**
     * @param AnalyticsEngineConfiguration $AnalyticsEngineConfiguration
     * @return MetadataConfiguration
     */
    public function setAnalyticsEngineConfiguration($AnalyticsEngineConfiguration)
    {
      $this->AnalyticsEngineConfiguration = $AnalyticsEngineConfiguration;
      return $this;
    }

    /**
     * @return MetadataConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param MetadataConfigurationExtension $Extension
     * @return MetadataConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompressionType()
    {
      return $this->CompressionType;
    }

    /**
     * @param string $CompressionType
     * @return MetadataConfiguration
     */
    public function setCompressionType($CompressionType)
    {
      $this->CompressionType = $CompressionType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGeoLocation()
    {
      return $this->GeoLocation;
    }

    /**
     * @param boolean $GeoLocation
     * @return MetadataConfiguration
     */
    public function setGeoLocation($GeoLocation)
    {
      $this->GeoLocation = $GeoLocation;
      return $this;
    }

}
