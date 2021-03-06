<?php

class PanTiltLimits
{

    /**
     * @var Space2DDescription $Range
     */
    protected $Range = null;

    /**
     * @param Space2DDescription $Range
     */
    public function __construct($Range)
    {
      $this->Range = $Range;
    }

    /**
     * @return Space2DDescription
     */
    public function getRange()
    {
      return $this->Range;
    }

    /**
     * @param Space2DDescription $Range
     * @return PanTiltLimits
     */
    public function setRange($Range)
    {
      $this->Range = $Range;
      return $this;
    }

}
