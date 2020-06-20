<?php

class AbsoluteFocus
{

    /**
     * @var float $Position
     */
    protected $Position = null;

    /**
     * @var float $Speed
     */
    protected $Speed = null;

    /**
     * @param float $Position
     */
    public function __construct($Position)
    {
      $this->Position = $Position;
    }

    /**
     * @return float
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param float $Position
     * @return AbsoluteFocus
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
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
     * @return AbsoluteFocus
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

}
