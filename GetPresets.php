<?php

class GetPresets
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @param ReferenceToken $ProfileToken
     */
    public function __construct($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
    }

    /**
     * @return ReferenceToken
     */
    public function getProfileToken()
    {
      return $this->ProfileToken;
    }

    /**
     * @param ReferenceToken $ProfileToken
     * @return GetPresets
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

}
