<?php

class SupportedRules
{

    /**
     * @var anyURI[] $RuleContentSchemaLocation
     */
    protected $RuleContentSchemaLocation = null;

    /**
     * @var ConfigDescription[] $RuleDescription
     */
    protected $RuleDescription = null;

    /**
     * @var SupportedRulesExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return anyURI[]
     */
    public function getRuleContentSchemaLocation()
    {
      return $this->RuleContentSchemaLocation;
    }

    /**
     * @param anyURI[] $RuleContentSchemaLocation
     * @return SupportedRules
     */
    public function setRuleContentSchemaLocation(array $RuleContentSchemaLocation = null)
    {
      $this->RuleContentSchemaLocation = $RuleContentSchemaLocation;
      return $this;
    }

    /**
     * @return ConfigDescription[]
     */
    public function getRuleDescription()
    {
      return $this->RuleDescription;
    }

    /**
     * @param ConfigDescription[] $RuleDescription
     * @return SupportedRules
     */
    public function setRuleDescription(array $RuleDescription = null)
    {
      $this->RuleDescription = $RuleDescription;
      return $this;
    }

    /**
     * @return SupportedRulesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SupportedRulesExtension $Extension
     * @return SupportedRules
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
