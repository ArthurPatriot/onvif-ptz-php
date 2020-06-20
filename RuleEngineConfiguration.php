<?php

class RuleEngineConfiguration
{

    /**
     * @var Config[] $Rule
     */
    protected $Rule = null;

    /**
     * @var RuleEngineConfigurationExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Config[]
     */
    public function getRule()
    {
      return $this->Rule;
    }

    /**
     * @param Config[] $Rule
     * @return RuleEngineConfiguration
     */
    public function setRule(array $Rule = null)
    {
      $this->Rule = $Rule;
      return $this;
    }

    /**
     * @return RuleEngineConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param RuleEngineConfigurationExtension $Extension
     * @return RuleEngineConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
