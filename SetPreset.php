<?php

class SetPreset
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var string $PresetName
     */
    protected $PresetName = null;

    /**
     * @var ReferenceToken $PresetToken
     */
    protected $PresetToken = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param string $PresetName
     * @param ReferenceToken $PresetToken
     */
    public function __construct($ProfileToken, $PresetName, $PresetToken)
    {
      $this->ProfileToken = $ProfileToken;
      $this->PresetName = $PresetName;
      $this->PresetToken = $PresetToken;
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
     * @return SetPreset
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getPresetName()
    {
      return $this->PresetName;
    }

    /**
     * @param string $PresetName
     * @return SetPreset
     */
    public function setPresetName($PresetName)
    {
      $this->PresetName = $PresetName;
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
     * @return SetPreset
     */
    public function setPresetToken($PresetToken)
    {
      $this->PresetToken = $PresetToken;
      return $this;
    }

}
