<?php

class ZoomLimits
{

    /**
     * @var Space1DDescription $Range
     */
    protected $Range = null;

    /**
     * @param Space1DDescription $Range
     */
    public function __construct($Range)
    {
      $this->Range = $Range;
    }

    /**
     * @return Space1DDescription
     */
    public function getRange()
    {
      return $this->Range;
    }

    /**
     * @param Space1DDescription $Range
     * @return ZoomLimits
     */
    public function setRange($Range)
    {
      $this->Range = $Range;
      return $this;
    }

}
