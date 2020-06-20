<?php

class CreatePresetTourResponse
{

    /**
     * @var ReferenceToken $PresetTourToken
     */
    protected $PresetTourToken = null;

    /**
     * @param ReferenceToken $PresetTourToken
     */
    public function __construct($PresetTourToken)
    {
      $this->PresetTourToken = $PresetTourToken;
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
     * @return CreatePresetTourResponse
     */
    public function setPresetTourToken($PresetTourToken)
    {
      $this->PresetTourToken = $PresetTourToken;
      return $this;
    }

}
