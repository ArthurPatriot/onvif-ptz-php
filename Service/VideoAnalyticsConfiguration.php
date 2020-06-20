<?php

class VideoAnalyticsConfiguration extends ConfigurationEntity
{

    /**
     * @var AnalyticsEngineConfiguration $AnalyticsEngineConfiguration
     */
    protected $AnalyticsEngineConfiguration = null;

    /**
     * @var RuleEngineConfiguration $RuleEngineConfiguration
     */
    protected $RuleEngineConfiguration = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Name $Name
     * @param int $UseCount
     * @param ReferenceToken $token
     * @param AnalyticsEngineConfiguration $AnalyticsEngineConfiguration
     * @param RuleEngineConfiguration $RuleEngineConfiguration
     * @param string $any
     */
    public function __construct($Name, $UseCount, $token, $AnalyticsEngineConfiguration, $RuleEngineConfiguration, $any)
    {
      parent::__construct($Name, $UseCount, $token);
      $this->AnalyticsEngineConfiguration = $AnalyticsEngineConfiguration;
      $this->RuleEngineConfiguration = $RuleEngineConfiguration;
      $this->any = $any;
    }

    /**
     * @return AnalyticsEngineConfiguration
     */
    public function getAnalyticsEngineConfiguration()
    {
      return $this->AnalyticsEngineConfiguration;
    }

    /**
     * @param AnalyticsEngineConfiguration $AnalyticsEngineConfiguration
     * @return VideoAnalyticsConfiguration
     */
    public function setAnalyticsEngineConfiguration($AnalyticsEngineConfiguration)
    {
      $this->AnalyticsEngineConfiguration = $AnalyticsEngineConfiguration;
      return $this;
    }

    /**
     * @return RuleEngineConfiguration
     */
    public function getRuleEngineConfiguration()
    {
      return $this->RuleEngineConfiguration;
    }

    /**
     * @param RuleEngineConfiguration $RuleEngineConfiguration
     * @return VideoAnalyticsConfiguration
     */
    public function setRuleEngineConfiguration($RuleEngineConfiguration)
    {
      $this->RuleEngineConfiguration = $RuleEngineConfiguration;
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
     * @return VideoAnalyticsConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
