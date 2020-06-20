<?php

class RelayOutputSettings
{

    /**
     * @var RelayMode $Mode
     */
    protected $Mode = null;

    /**
     * @var duration $DelayTime
     */
    protected $DelayTime = null;

    /**
     * @var RelayIdleState $IdleState
     */
    protected $IdleState = null;

    /**
     * @param RelayMode $Mode
     * @param duration $DelayTime
     * @param RelayIdleState $IdleState
     */
    public function __construct($Mode, $DelayTime, $IdleState)
    {
      $this->Mode = $Mode;
      $this->DelayTime = $DelayTime;
      $this->IdleState = $IdleState;
    }

    /**
     * @return RelayMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param RelayMode $Mode
     * @return RelayOutputSettings
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDelayTime()
    {
      return $this->DelayTime;
    }

    /**
     * @param duration $DelayTime
     * @return RelayOutputSettings
     */
    public function setDelayTime($DelayTime)
    {
      $this->DelayTime = $DelayTime;
      return $this;
    }

    /**
     * @return RelayIdleState
     */
    public function getIdleState()
    {
      return $this->IdleState;
    }

    /**
     * @param RelayIdleState $IdleState
     * @return RelayOutputSettings
     */
    public function setIdleState($IdleState)
    {
      $this->IdleState = $IdleState;
      return $this;
    }

}
