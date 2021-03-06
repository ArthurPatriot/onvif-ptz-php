<?php

class IrCutFilterAutoAdjustment
{

    /**
     * @var string $BoundaryType
     */
    protected $BoundaryType = null;

    /**
     * @var float $BoundaryOffset
     */
    protected $BoundaryOffset = null;

    /**
     * @var duration $ResponseTime
     */
    protected $ResponseTime = null;

    /**
     * @var IrCutFilterAutoAdjustmentExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param string $BoundaryType
     */
    public function __construct($BoundaryType)
    {
      $this->BoundaryType = $BoundaryType;
    }

    /**
     * @return string
     */
    public function getBoundaryType()
    {
      return $this->BoundaryType;
    }

    /**
     * @param string $BoundaryType
     * @return IrCutFilterAutoAdjustment
     */
    public function setBoundaryType($BoundaryType)
    {
      $this->BoundaryType = $BoundaryType;
      return $this;
    }

    /**
     * @return float
     */
    public function getBoundaryOffset()
    {
      return $this->BoundaryOffset;
    }

    /**
     * @param float $BoundaryOffset
     * @return IrCutFilterAutoAdjustment
     */
    public function setBoundaryOffset($BoundaryOffset)
    {
      $this->BoundaryOffset = $BoundaryOffset;
      return $this;
    }

    /**
     * @return duration
     */
    public function getResponseTime()
    {
      return $this->ResponseTime;
    }

    /**
     * @param duration $ResponseTime
     * @return IrCutFilterAutoAdjustment
     */
    public function setResponseTime($ResponseTime)
    {
      $this->ResponseTime = $ResponseTime;
      return $this;
    }

    /**
     * @return IrCutFilterAutoAdjustmentExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param IrCutFilterAutoAdjustmentExtension $Extension
     * @return IrCutFilterAutoAdjustment
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
