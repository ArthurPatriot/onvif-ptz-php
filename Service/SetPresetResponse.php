<?php

class SetPresetResponse
{

    /**
     * @var ReferenceToken $PresetToken
     */
    protected $PresetToken = null;

    /**
     * @param ReferenceToken $PresetToken
     */
    public function __construct($PresetToken)
    {
      $this->PresetToken = $PresetToken;
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
     * @return SetPresetResponse
     */
    public function setPresetToken($PresetToken)
    {
      $this->PresetToken = $PresetToken;
      return $this;
    }

}
