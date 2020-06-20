<?php

class ContinuousMove
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var PTZSpeed $Velocity
     */
    protected $Velocity = null;

    /**
     * @var duration $Timeout
     */
    protected $Timeout = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param PTZSpeed $Velocity
     * @param duration $Timeout
     */
    public function __construct($ProfileToken, $Velocity, $Timeout)
    {
      $this->ProfileToken = $ProfileToken;
      $this->Velocity = $Velocity;
      $this->Timeout = $Timeout;
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
     * @return ContinuousMove
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return PTZSpeed
     */
    public function getVelocity()
    {
      return $this->Velocity;
    }

    /**
     * @param PTZSpeed $Velocity
     * @return ContinuousMove
     */
    public function setVelocity($Velocity)
    {
      $this->Velocity = $Velocity;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTimeout()
    {
      return $this->Timeout;
    }

    /**
     * @param duration $Timeout
     * @return ContinuousMove
     */
    public function setTimeout($Timeout)
    {
      $this->Timeout = $Timeout;
      return $this;
    }

}
