<?php

class GetConfigurationOptionsResponse
{

    /**
     * @var PTZConfigurationOptions $PTZConfigurationOptions
     */
    protected $PTZConfigurationOptions = null;

    /**
     * @param PTZConfigurationOptions $PTZConfigurationOptions
     */
    public function __construct($PTZConfigurationOptions)
    {
      $this->PTZConfigurationOptions = $PTZConfigurationOptions;
    }

    /**
     * @return PTZConfigurationOptions
     */
    public function getPTZConfigurationOptions()
    {
      return $this->PTZConfigurationOptions;
    }

    /**
     * @param PTZConfigurationOptions $PTZConfigurationOptions
     * @return GetConfigurationOptionsResponse
     */
    public function setPTZConfigurationOptions($PTZConfigurationOptions)
    {
      $this->PTZConfigurationOptions = $PTZConfigurationOptions;
      return $this;
    }

}
