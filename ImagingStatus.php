<?php

class ImagingStatus
{

    /**
     * @var FocusStatus $FocusStatus
     */
    protected $FocusStatus = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param FocusStatus $FocusStatus
     * @param string $any
     */
    public function __construct($FocusStatus, $any)
    {
      $this->FocusStatus = $FocusStatus;
      $this->any = $any;
    }

    /**
     * @return FocusStatus
     */
    public function getFocusStatus()
    {
      return $this->FocusStatus;
    }

    /**
     * @param FocusStatus $FocusStatus
     * @return ImagingStatus
     */
    public function setFocusStatus($FocusStatus)
    {
      $this->FocusStatus = $FocusStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return ImagingStatus
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
