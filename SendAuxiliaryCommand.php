<?php

class SendAuxiliaryCommand
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var AuxiliaryData $AuxiliaryData
     */
    protected $AuxiliaryData = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param AuxiliaryData $AuxiliaryData
     */
    public function __construct($ProfileToken, $AuxiliaryData)
    {
      $this->ProfileToken = $ProfileToken;
      $this->AuxiliaryData = $AuxiliaryData;
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
     * @return SendAuxiliaryCommand
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return AuxiliaryData
     */
    public function getAuxiliaryData()
    {
      return $this->AuxiliaryData;
    }

    /**
     * @param AuxiliaryData $AuxiliaryData
     * @return SendAuxiliaryCommand
     */
    public function setAuxiliaryData($AuxiliaryData)
    {
      $this->AuxiliaryData = $AuxiliaryData;
      return $this;
    }

}
