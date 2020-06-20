<?php

class ModifyPresetTour
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var PresetTour $PresetTour
     */
    protected $PresetTour = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param PresetTour $PresetTour
     */
    public function __construct($ProfileToken, $PresetTour)
    {
      $this->ProfileToken = $ProfileToken;
      $this->PresetTour = $PresetTour;
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
     * @return ModifyPresetTour
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return PresetTour
     */
    public function getPresetTour()
    {
      return $this->PresetTour;
    }

    /**
     * @param PresetTour $PresetTour
     * @return ModifyPresetTour
     */
    public function setPresetTour($PresetTour)
    {
      $this->PresetTour = $PresetTour;
      return $this;
    }

}
