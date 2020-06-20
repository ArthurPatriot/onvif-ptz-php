<?php

class GotoPreset
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var ReferenceToken $PresetToken
     */
    protected $PresetToken = null;

    /**
     * @var PTZSpeed $Speed
     */
    protected $Speed = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param ReferenceToken $PresetToken
     * @param PTZSpeed $Speed
     */
    public function __construct($ProfileToken, $PresetToken, $Speed)
    {
      $this->ProfileToken = $ProfileToken;
      $this->PresetToken = $PresetToken;
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
     * @return GotoPreset
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getPresetToken()
    {
      return $this->PresetToken;
    }

    /**
     * @param ReferenceToken $PresetToken
     * @return GotoPreset
     */
    public function setPresetToken($PresetToken)
    {
      $this->PresetToken = $PresetToken;
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
     * @return GotoPreset
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
