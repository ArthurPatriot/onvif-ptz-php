<?php

class GetPresetTour
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var ReferenceToken $PresetTourToken
     */
    protected $PresetTourToken = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param ReferenceToken $PresetTourToken
     */
    public function __construct($ProfileToken, $PresetTourToken)
    {
      $this->ProfileToken = $ProfileToken;
      $this->PresetTourToken = $PresetTourToken;
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
     * @return GetPresetTour
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return ReferenceToken
     */
    public function getPresetTourToken()
    {
      return $this->PresetTourToken;
    }

    /**
     * @param ReferenceToken $PresetTourToken
     * @return GetPresetTour
     */
    public function setPresetTourToken($PresetTourToken)
    {
      $this->PresetTourToken = $PresetTourToken;
      return $this;
    }

}
