<?php

class RelativeMove
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var PTZVector $Translation
     */
    protected $Translation = null;

    /**
     * @var PTZSpeed $Speed
     */
    protected $Speed = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param PTZVector $Translation
     * @param PTZSpeed $Speed
     */
    public function __construct($ProfileToken, $Translation, $Speed)
    {
      $this->ProfileToken = $ProfileToken;
      $this->Translation = $Translation;
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
     * @return RelativeMove
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return PTZVector
     */
    public function getTranslation()
    {
      return $this->Translation;
    }

    /**
     * @param PTZVector $Translation
     * @return RelativeMove
     */
    public function setTranslation($Translation)
    {
      $this->Translation = $Translation;
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
     * @return RelativeMove
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
