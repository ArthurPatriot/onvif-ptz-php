<?php

class GetConfigurationsResponse
{

    /**
     * @var PTZConfiguration $PTZConfiguration
     */
    protected $PTZConfiguration = null;

    /**
     * @param PTZConfiguration $PTZConfiguration
     */
    public function __construct($PTZConfiguration)
    {
      $this->PTZConfiguration = $PTZConfiguration;
    }

    /**
     * @return PTZConfiguration
     */
    public function getPTZConfiguration()
    {
      return $this->PTZConfiguration;
    }

    /**
     * @param PTZConfiguration $PTZConfiguration
     * @return GetConfigurationsResponse
     */
    public function setPTZConfiguration($PTZConfiguration)
    {
      $this->PTZConfiguration = $PTZConfiguration;
      return $this;
    }

}
