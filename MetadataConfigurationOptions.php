<?php

class MetadataConfigurationOptions
{

    /**
     * @var PTZStatusFilterOptions $PTZStatusFilterOptions
     */
    protected $PTZStatusFilterOptions = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var MetadataConfigurationOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var boolean $GeoLocation
     */
    protected $GeoLocation = null;

    /**
     * @param PTZStatusFilterOptions $PTZStatusFilterOptions
     * @param string $any
     * @param boolean $GeoLocation
     */
    public function __construct($PTZStatusFilterOptions, $any, $GeoLocation)
    {
      $this->PTZStatusFilterOptions = $PTZStatusFilterOptions;
      $this->any = $any;
      $this->GeoLocation = $GeoLocation;
    }

    /**
     * @return PTZStatusFilterOptions
     */
    public function getPTZStatusFilterOptions()
    {
      return $this->PTZStatusFilterOptions;
    }

    /**
     * @param PTZStatusFilterOptions $PTZStatusFilterOptions
     * @return MetadataConfigurationOptions
     */
    public function setPTZStatusFilterOptions($PTZStatusFilterOptions)
    {
      $this->PTZStatusFilterOptions = $PTZStatusFilterOptions;
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
     * @return MetadataConfigurationOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return MetadataConfigurationOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param MetadataConfigurationOptionsExtension $Extension
     * @return MetadataConfigurationOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
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
     * @return MetadataConfigurationOptions
     */
    public function setGeoLocation($GeoLocation)
    {
      $this->GeoLocation = $GeoLocation;
      return $this;
    }

}
