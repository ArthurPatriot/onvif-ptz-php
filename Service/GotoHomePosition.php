<?php

class GotoHomePosition
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var PTZSpeed $Speed
     */
    protected $Speed = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param PTZSpeed $Speed
     */
    public function __construct($ProfileToken, $Speed)
    {
      $this->ProfileToken = $ProfileToken;
      $this->Speed = $Speed;
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
     * @return GotoHomePosition
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return PTZSpeed
     */
    public function getSpeed()
    {
      return $this->Speed;
    }

    /**
     * @param PTZSpeed $Speed
     * @return GotoHomePosition
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
