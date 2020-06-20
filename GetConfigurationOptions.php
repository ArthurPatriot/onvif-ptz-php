<?php

class GetConfigurationOptions
{

    /**
     * @var ReferenceToken $ConfigurationToken
     */
    protected $ConfigurationToken = null;

    /**
     * @param ReferenceToken $ConfigurationToken
     */
    public function __construct($ConfigurationToken)
    {
      $this->ConfigurationToken = $ConfigurationToken;
    }

    /**
     * @return ReferenceToken
     */
    public function getConfigurationToken()
    {
      return $this->ConfigurationToken;
    }

    /**
     * @param ReferenceToken $ConfigurationToken
     * @return GetConfigurationOptions
     */
    public function setConfigurationToken($ConfigurationToken)
    {
      $this->ConfigurationToken = $ConfigurationToken;
      return $this;
    }

}
