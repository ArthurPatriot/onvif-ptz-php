<?php

class AnalyticsEngineInputInfo
{

    /**
     * @var Config $InputInfo
     */
    protected $InputInfo = null;

    /**
     * @var AnalyticsEngineInputInfoExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Config
     */
    public function getInputInfo()
    {
      return $this->InputInfo;
    }

    /**
     * @param Config $InputInfo
     * @return AnalyticsEngineInputInfo
     */
    public function setInputInfo($InputInfo)
    {
      $this->InputInfo = $InputInfo;
      return $this;
    }

    /**
     * @return AnalyticsEngineInputInfoExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param AnalyticsEngineInputInfoExtension $Extension
     * @return AnalyticsEngineInputInfo
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
