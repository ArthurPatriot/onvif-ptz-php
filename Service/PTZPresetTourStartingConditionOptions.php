<?php

class PTZPresetTourStartingConditionOptions
{

    /**
     * @var IntRange $RecurringTime
     */
    protected $RecurringTime = null;

    /**
     * @var DurationRange $RecurringDuration
     */
    protected $RecurringDuration = null;

    /**
     * @var PTZPresetTourDirection[] $Direction
     */
    protected $Direction = null;

    /**
     * @var PTZPresetTourStartingConditionOptionsExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return IntRange
     */
    public function getRecurringTime()
    {
      return $this->RecurringTime;
    }

    /**
     * @param IntRange $RecurringTime
     * @return PTZPresetTourStartingConditionOptions
     */
    public function setRecurringTime($RecurringTime)
    {
      $this->RecurringTime = $RecurringTime;
      return $this;
    }

    /**
     * @return DurationRange
     */
    public function getRecurringDuration()
    {
      return $this->RecurringDuration;
    }

    /**
     * @param DurationRange $RecurringDuration
     * @return PTZPresetTourStartingConditionOptions
     */
    public function setRecurringDuration($RecurringDuration)
    {
      $this->RecurringDuration = $RecurringDuration;
      return $this;
    }

    /**
     * @return PTZPresetTourDirection[]
     */
    public function getDirection()
    {
      return $this->Direction;
    }

    /**
     * @param PTZPresetTourDirection[] $Direction
     * @return PTZPresetTourStartingConditionOptions
     */
    public function setDirection(array $Direction = null)
    {
      $this->Direction = $Direction;
      return $this;
    }

    /**
     * @return PTZPresetTourStartingConditionOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZPresetTourStartingConditionOptionsExtension $Extension
     * @return PTZPresetTourStartingConditionOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
