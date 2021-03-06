<?php

class PTZPresetTourSpot
{

    /**
     * @var PTZPresetTourPresetDetail $PresetDetail
     */
    protected $PresetDetail = null;

    /**
     * @var PTZSpeed $Speed
     */
    protected $Speed = null;

    /**
     * @var duration $StayTime
     */
    protected $StayTime = null;

    /**
     * @var PTZPresetTourSpotExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param PTZPresetTourPresetDetail $PresetDetail
     */
    public function __construct($PresetDetail)
    {
      $this->PresetDetail = $PresetDetail;
    }

    /**
     * @return PTZPresetTourPresetDetail
     */
    public function getPresetDetail()
    {
      return $this->PresetDetail;
    }

    /**
     * @param PTZPresetTourPresetDetail $PresetDetail
     * @return PTZPresetTourSpot
     */
    public function setPresetDetail($PresetDetail)
    {
      $this->PresetDetail = $PresetDetail;
      return $this;
    }

    /**
     * @return PTZSpeed
     */
    public function getSpeed()
    {
      return $this->Speed;
    }

    /**
     * @param PTZSpeed $Speed
     * @return PTZPresetTourSpot
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

    /**
     * @return duration
     */
    public function getStayTime()
    {
      return $this->StayTime;
    }

    /**
     * @param duration $StayTime
     * @return PTZPresetTourSpot
     */
    public function setStayTime($StayTime)
    {
      $this->StayTime = $StayTime;
      return $this;
    }

    /**
     * @return PTZPresetTourSpotExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZPresetTourSpotExtension $Extension
     * @return PTZPresetTourSpot
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
