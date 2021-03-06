<?php

class ImagingSettingsExtension202
{

    /**
     * @var IrCutFilterAutoAdjustment[] $IrCutFilterAutoAdjustment
     */
    protected $IrCutFilterAutoAdjustment = null;

    /**
     * @var ImagingSettingsExtension203 $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return IrCutFilterAutoAdjustment[]
     */
    public function getIrCutFilterAutoAdjustment()
    {
      return $this->IrCutFilterAutoAdjustment;
    }

    /**
     * @param IrCutFilterAutoAdjustment[] $IrCutFilterAutoAdjustment
     * @return ImagingSettingsExtension202
     */
    public function setIrCutFilterAutoAdjustment(array $IrCutFilterAutoAdjustment = null)
    {
      $this->IrCutFilterAutoAdjustment = $IrCutFilterAutoAdjustment;
      return $this;
    }

    /**
     * @return ImagingSettingsExtension203
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImagingSettingsExtension203 $Extension
     * @return ImagingSettingsExtension202
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
