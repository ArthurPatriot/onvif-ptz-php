<?php

class GetStatusResponse
{

    /**
     * @var PTZStatus $PTZStatus
     */
    protected $PTZStatus = null;

    /**
     * @param PTZStatus $PTZStatus
     */
    public function __construct($PTZStatus)
    {
      $this->PTZStatus = $PTZStatus;
    }

    /**
     * @return PTZStatus
     */
    public function getPTZStatus()
    {
      return $this->PTZStatus;
    }

    /**
     * @param PTZStatus $PTZStatus
     * @return GetStatusResponse
     */
    public function setPTZStatus($PTZStatus)
    {
      $this->PTZStatus = $PTZStatus;
      return $this;
    }

}
