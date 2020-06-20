<?php

class IrCutFilterAutoAdjustmentOptions
{

    /**
     * @var string[] $BoundaryType
     */
    protected $BoundaryType = null;

    /**
     * @var boolean $BoundaryOffset
     */
    protected $BoundaryOffset = null;

    /**
     * @var DurationRange $ResponseTimeRange
     */
    protected $ResponseTimeRange = null;

    /**
     * @var IrCutFilterAutoAdjustmentOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param string[] $BoundaryType
     */
    public function __construct(array $BoundaryType)
    {
      $this->BoundaryType = $BoundaryType;
    }

    /**
     * @return string[]
     */
    public function getBoundaryType()
    {
      return $this->BoundaryType;
    }

    /**
     * @param string[] $BoundaryType
     * @return IrCutFilterAutoAdjustmentOptions
     */
    public function setBoundaryType(array $BoundaryType)
    {
      $this->BoundaryType = $BoundaryType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBoundaryOffset()
    {
      return $this->BoundaryOffset;
    }

    /**
     * @param boolean $BoundaryOffset
     * @return IrCutFilterAutoAdjustmentOptions
     */
    public function setBoundaryOffset($BoundaryOffset)
    {
      $this->BoundaryOffset = $BoundaryOffset;
      return $this;
    }

    /**
     * @return DurationRange
     */
    public function getResponseTimeRange()
    {
      return $this->ResponseTimeRange;
    }

    /**
     * @param DurationRange $ResponseTimeRange
     * @return IrCutFilterAutoAdjustmentOptions
     */
    public function setResponseTimeRange($ResponseTimeRange)
    {
      $this->ResponseTimeRange = $ResponseTimeRange;
      return $this;
    }

    /**
     * @return IrCutFilterAutoAdjustmentOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param IrCutFilterAutoAdjustmentOptionsExtension $Extension
     * @return IrCutFilterAutoAdjustmentOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
