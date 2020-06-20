<?php

class PTZPresetTourStatus
{

    /**
     * @var PTZPresetTourState $State
     */
    protected $State = null;

    /**
     * @var PTZPresetTourSpot $CurrentTourSpot
     */
    protected $CurrentTourSpot = null;

    /**
     * @var PTZPresetTourStatusExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param PTZPresetTourState $State
     */
    public function __construct($State)
    {
      $this->State = $State;
    }

    /**
     * @return PTZPresetTourState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param PTZPresetTourState $State
     * @return PTZPresetTourStatus
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return PTZPresetTourSpot
     */
    public function getCurrentTourSpot()
    {
      return $this->CurrentTourSpot;
    }

    /**
     * @param PTZPresetTourSpot $CurrentTourSpot
     * @return PTZPresetTourStatus
     */
    public function setCurrentTourSpot($CurrentTourSpot)
    {
      $this->CurrentTourSpot = $CurrentTourSpot;
      return $this;
    }

    /**
     * @return PTZPresetTourStatusExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZPresetTourStatusExtension $Extension
     * @return PTZPresetTourStatus
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
