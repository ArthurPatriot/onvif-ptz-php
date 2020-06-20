<?php

class GetPresetTourOptionsResponse
{

    /**
     * @var PTZPresetTourOptions $Options
     */
    protected $Options = null;

    /**
     * @param PTZPresetTourOptions $Options
     */
    public function __construct($Options)
    {
      $this->Options = $Options;
    }

    /**
     * @return PTZPresetTourOptions
     */
    public function getOptions()
    {
      return $this->Options;
    }

    /**
     * @param PTZPresetTourOptions $Options
     * @return GetPresetTourOptionsResponse
     */
    public function setOptions($Options)
    {
      $this->Options = $Options;
      return $this;
    }

}
