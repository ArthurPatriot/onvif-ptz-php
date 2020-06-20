<?php

class GetConfiguration
{

    /**
     * @var ReferenceToken $PTZConfigurationToken
     */
    protected $PTZConfigurationToken = null;

    /**
     * @param ReferenceToken $PTZConfigurationToken
     */
    public function __construct($PTZConfigurationToken)
    {
      $this->PTZConfigurationToken = $PTZConfigurationToken;
    }

    /**
     * @return ReferenceToken
     */
    public function getPTZConfigurationToken()
    {
      return $this->PTZConfigurationToken;
    }

    /**
     * @param ReferenceToken $PTZConfigurationToken
     * @return GetConfiguration
     */
    public function setPTZConfigurationToken($PTZConfigurationToken)
    {
      $this->PTZConfigurationToken = $PTZConfigurationToken;
      return $this;
    }

}
