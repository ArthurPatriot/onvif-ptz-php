<?php

class ImagingOptions20Extension2
{

    /**
     * @var IrCutFilterAutoAdjustmentOptions $IrCutFilterAutoAdjustment
     */
    protected $IrCutFilterAutoAdjustment = null;

    /**
     * @var ImagingOptions20Extension3 $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return IrCutFilterAutoAdjustmentOptions
     */
    public function getIrCutFilterAutoAdjustment()
    {
      return $this->IrCutFilterAutoAdjustment;
    }

    /**
     * @param IrCutFilterAutoAdjustmentOptions $IrCutFilterAutoAdjustment
     * @return ImagingOptions20Extension2
     */
    public function setIrCutFilterAutoAdjustment($IrCutFilterAutoAdjustment)
    {
      $this->IrCutFilterAutoAdjustment = $IrCutFilterAutoAdjustment;
      return $this;
    }

    /**
     * @return ImagingOptions20Extension3
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImagingOptions20Extension3 $Extension
     * @return ImagingOptions20Extension2
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
