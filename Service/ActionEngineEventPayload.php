<?php

class ActionEngineEventPayload
{

    /**
     * @var Envelope $RequestInfo
     */
    protected $RequestInfo = null;

    /**
     * @var Envelope $ResponseInfo
     */
    protected $ResponseInfo = null;

    /**
     * @var Fault $Fault
     */
    protected $Fault = null;

    /**
     * @var ActionEngineEventPayloadExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Envelope
     */
    public function getRequestInfo()
    {
      return $this->RequestInfo;
    }

    /**
     * @param Envelope $RequestInfo
     * @return ActionEngineEventPayload
     */
    public function setRequestInfo($RequestInfo)
    {
      $this->RequestInfo = $RequestInfo;
      return $this;
    }

    /**
     * @return Envelope
     */
    public function getResponseInfo()
    {
      return $this->ResponseInfo;
    }

    /**
     * @param Envelope $ResponseInfo
     * @return ActionEngineEventPayload
     */
    public function setResponseInfo($ResponseInfo)
    {
      $this->ResponseInfo = $ResponseInfo;
      return $this;
    }

    /**
     * @return Fault
     */
    public function getFault()
    {
      return $this->Fault;
    }

    /**
     * @param Fault $Fault
     * @return ActionEngineEventPayload
     */
    public function setFault($Fault)
    {
      $this->Fault = $Fault;
      return $this;
    }

    /**
     * @return ActionEngineEventPayloadExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ActionEngineEventPayloadExtension $Extension
     * @return ActionEngineEventPayload
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
