<?php

class PTZPreset
{

    /**
     * @var Name $Name
     */
    protected $Name = null;

    /**
     * @var PTZVector $PTZPosition
     */
    protected $PTZPosition = null;

    /**
     * @var ReferenceToken $token
     */
    protected $token = null;

    /**
     * @param ReferenceToken $token
     */
    public function __construct($token)
    {
      $this->token = $token;
    }

    /**
     * @return Name
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param Name $Name
     * @return PTZPreset
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return PTZVector
     */
    public function getPTZPosition()
    {
      return $this->PTZPosition;
    }

    /**
     * @param PTZVector $PTZPosition
     * @return PTZPreset
     */
    public function setPTZPosition($PTZPosition)
    {
      $this->PTZPosition = $PTZPosition;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getToken()
    {
      return $this->token;
    }

    /**
     * @param ReferenceToken $token
     * @return PTZPreset
     */
    public function setToken($token)
    {
      $this->token = $token;
      return $this;
    }

}
