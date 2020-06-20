<?php

class PTZFilter
{

    /**
     * @var boolean $Status
     */
    protected $Status = null;

    /**
     * @var boolean $Position
     */
    protected $Position = null;

    /**
     * @param boolean $Status
     * @param boolean $Position
     */
    public function __construct($Status, $Position)
    {
      $this->Status = $Status;
      $this->Position = $Position;
    }

    /**
     * @return boolean
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param boolean $Status
     * @return PTZFilter
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPosition()
    {
      return $this->Position;
    }

    /**
     * @param boolean $Position
     * @return PTZFilter
     */
    public function setPosition($Position)
    {
      $this->Position = $Position;
      return $this;
    }

}
