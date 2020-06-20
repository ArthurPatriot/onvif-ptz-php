<?php

class OperatePresetTour
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
     * @var PTZPresetTourOperation $Operation
     */
    protected $Operation = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param ReferenceToken $PresetTourToken
     * @param PTZPresetTourOperation $Operation
     */
    public function __construct($ProfileToken, $PresetTourToken, $Operation)
    {
      $this->ProfileToken = $ProfileToken;
      $this->PresetTourToken = $PresetTourToken;
      $this->Operation = $Operation;
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
     * @return OperatePresetTour
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
     * @return OperatePresetTour
     */
    public function setPresetTourToken($PresetTourToken)
    {
      $this->PresetTourToken = $PresetTourToken;
      return $this;
    }

    /**
     * @return PTZPresetTourOperation
     */
    public function getOperation()
    {
      return $this->Operation;
    }

    /**
     * @param PTZPresetTourOperation $Operation
     * @return OperatePresetTour
     */
    public function setOperation($Operation)
    {
      $this->Operation = $Operation;
      return $this;
    }

}
