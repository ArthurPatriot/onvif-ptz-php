<?php

class SupportedAnalyticsModules
{

    /**
     * @var anyURI[] $AnalyticsModuleContentSchemaLocation
     */
    protected $AnalyticsModuleContentSchemaLocation = null;

    /**
     * @var ConfigDescription[] $AnalyticsModuleDescription
     */
    protected $AnalyticsModuleDescription = null;

    /**
     * @var SupportedAnalyticsModulesExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anyURI[]
     */
    public function getAnalyticsModuleContentSchemaLocation()
    {
      return $this->AnalyticsModuleContentSchemaLocation;
    }

    /**
     * @param anyURI[] $AnalyticsModuleContentSchemaLocation
     * @return SupportedAnalyticsModules
     */
    public function setAnalyticsModuleContentSchemaLocation(array $AnalyticsModuleContentSchemaLocation = null)
    {
      $this->AnalyticsModuleContentSchemaLocation = $AnalyticsModuleContentSchemaLocation;
      return $this;
    }

    /**
     * @return ConfigDescription[]
     */
    public function getAnalyticsModuleDescription()
    {
      return $this->AnalyticsModuleDescription;
    }

    /**
     * @param ConfigDescription[] $AnalyticsModuleDescription
     * @return SupportedAnalyticsModules
     */
    public function setAnalyticsModuleDescription(array $AnalyticsModuleDescription = null)
    {
      $this->AnalyticsModuleDescription = $AnalyticsModuleDescription;
      return $this;
    }

    /**
     * @return SupportedAnalyticsModulesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SupportedAnalyticsModulesExtension $Extension
     * @return SupportedAnalyticsModules
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
