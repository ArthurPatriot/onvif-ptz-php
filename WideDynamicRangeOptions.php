<?php

class WideDynamicRangeOptions
{

    /**
     * @var WideDynamicMode[] $Mode
     */
    protected $Mode = null;

    /**
     * @var FloatRange $Level
     */
    protected $Level = null;

    /**
     * @param WideDynamicMode[] $Mode
     * @param FloatRange $Level
     */
    public function __construct(array $Mode, $Level)
    {
      $this->Mode = $Mode;
      $this->Level = $Level;
    }

    /**
     * @return WideDynamicMode[]
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param WideDynamicMode[] $Mode
     * @return WideDynamicRangeOptions
     */
    public function setMode(array $Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getLevel()
    {
      return $this->Level;
    }

    /**
     * @param FloatRange $Level
     * @return WideDynamicRangeOptions
     */
    public function setLevel($Level)
    {
      $this->Level = $Level;
      return $this;
    }

}
