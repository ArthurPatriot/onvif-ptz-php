<?php

class PTZPresetTourSpotOptions
{

    /**
     * @var PTZPresetTourPresetDetailOptions $PresetDetail
     */
    protected $PresetDetail = null;

    /**
     * @var DurationRange $StayTime
     */
    protected $StayTime = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param PTZPresetTourPresetDetailOptions $PresetDetail
     * @param DurationRange $StayTime
     * @param string $any
     */
    public function __construct($PresetDetail, $StayTime, $any)
    {
      $this->PresetDetail = $PresetDetail;
      $this->StayTime = $StayTime;
      $this->any = $any;
    }

    /**
     * @return PTZPresetTourPresetDetailOptions
     */
    public function getPresetDetail()
    {
      return $this->PresetDetail;
    }

    /**
     * @param PTZPresetTourPresetDetailOptions $PresetDetail
     * @return PTZPresetTourSpotOptions
     */
    public function setPresetDetail($PresetDetail)
    {
      $this->PresetDetail = $PresetDetail;
      return $this;
    }

    /**
     * @return DurationRange
     */
    public function getStayTime()
    {
      return $this->StayTime;
    }

    /**
     * @param DurationRange $StayTime
     * @return PTZPresetTourSpotOptions
     */
    public function setStayTime($StayTime)
    {
      $this->StayTime = $StayTime;
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
     * @return PTZPresetTourSpotOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
