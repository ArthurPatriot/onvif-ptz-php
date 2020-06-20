<?php

class RemovePreset
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
     * @param ReferenceToken $ProfileToken
     * @param ReferenceToken $PresetToken
     */
    public function __construct($ProfileToken, $PresetToken)
    {
      $this->ProfileToken = $ProfileToken;
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
     * @return RemovePreset
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
     * @return RemovePreset
     */
    public function setPresetToken($PresetToken)
    {
      $this->PresetToken = $PresetToken;
      return $this;
    }

}
