<?php

class MediaCapabilitiesExtension
{

    /**
     * @var ProfileCapabilities $ProfileCapabilities
     */
    protected $ProfileCapabilities = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param ProfileCapabilities $ProfileCapabilities
     * @param string $any
     */
    public function __construct($ProfileCapabilities, $any)
    {
      $this->ProfileCapabilities = $ProfileCapabilities;
      $this->any = $any;
    }

    /**
     * @return ProfileCapabilities
     */
    public function getProfileCapabilities()
    {
      return $this->ProfileCapabilities;
    }

    /**
     * @param ProfileCapabilities $ProfileCapabilities
     * @return MediaCapabilitiesExtension
     */
    public function setProfileCapabilities($ProfileCapabilities)
    {
      $this->ProfileCapabilities = $ProfileCapabilities;
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
     * @return MediaCapabilitiesExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
