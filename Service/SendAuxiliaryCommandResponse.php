<?php

class SendAuxiliaryCommandResponse
{

    /**
     * @var AuxiliaryData $AuxiliaryResponse
     */
    protected $AuxiliaryResponse = null;

    /**
     * @param AuxiliaryData $AuxiliaryResponse
     */
    public function __construct($AuxiliaryResponse)
    {
      $this->AuxiliaryResponse = $AuxiliaryResponse;
    }

    /**
     * @return AuxiliaryData
     */
    public function getAuxiliaryResponse()
    {
      return $this->AuxiliaryResponse;
    }

    /**
     * @param AuxiliaryData $AuxiliaryResponse
     * @return SendAuxiliaryCommandResponse
     */
    public function setAuxiliaryResponse($AuxiliaryResponse)
    {
      $this->AuxiliaryResponse = $AuxiliaryResponse;
      return $this;
    }

}
