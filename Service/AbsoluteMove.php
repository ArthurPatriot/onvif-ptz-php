<?php

class AbsoluteMove
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var PTZVector $Position
     */
    protected $Position = null;

    /**
     * @var PTZSpeed $Speed
     */
    protected $Speed = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param PTZVector $Position
     * @param PTZSpeed $Speed
     */
    public function __construct($ProfileToken, $Position, $Speed)
    {
      $this->ProfileToken = $ProfileToken;
      $this->Position = $Position;
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
     * @return AbsoluteMove
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return PTZVector
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param PTZVector $Position
     * @return AbsoluteMove
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
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
     * @return AbsoluteMove
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
