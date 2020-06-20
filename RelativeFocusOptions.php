<?php

class RelativeFocusOptions
{

    /**
     * @var FloatRange $Distance
     */
    protected $Distance = null;

    /**
     * @var FloatRange $Speed
     */
    protected $Speed = null;

    /**
     * @param FloatRange $Distance
     * @param FloatRange $Speed
     */
    public function __construct($Distance, $Speed)
    {
      $this->Distance = $Distance;
      $this->Speed = $Speed;
    }

    /**
     * @return FloatRange
     */
    public function getDistance()
    {
      return $this->Distance;
    }

    /**
     * @param FloatRange $Distance
     * @return RelativeFocusOptions
     */
    public function setDistance($Distance)
    {
      $this->Distance = $Distance;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getSpeed()
    {
      return $this->Speed;
    }

    /**
     * @param FloatRange $Speed
     * @return RelativeFocusOptions
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
