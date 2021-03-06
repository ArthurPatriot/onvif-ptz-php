<?php

class ContinuousFocus
{

    /**
     * @var float $Speed
     */
    protected $Speed = null;

    /**
     * @param float $Speed
     */
    public function __construct($Speed)
    {
      $this->Speed = $Speed;
    }

    /**
     * @return float
     */
    public function getSpeed()
    {
      return $this->Speed;
    }

    /**
     * @param float $Speed
     * @return ContinuousFocus
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
