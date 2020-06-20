<?php

class AudioEncoderConfigurationOptions
{

    /**
     * @var AudioEncoderConfigurationOption[] $Options
     */
    protected $Options = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AudioEncoderConfigurationOption[]
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param AudioEncoderConfigurationOption[] $Options
     * @return AudioEncoderConfigurationOptions
     */
    public function setOptions(array $Options = null)
    {
      $this->Options = $Options;
      return $this;
    }

}
