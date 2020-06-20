<?php

class ImagingOptions
{

    /**
     * @var BacklightCompensationOptions $BacklightCompensation
     */
    protected $BacklightCompensation = null;

    /**
     * @var FloatRange $Brightness
     */
    protected $Brightness = null;

    /**
     * @var FloatRange $ColorSaturation
     */
    protected $ColorSaturation = null;

    /**
     * @var FloatRange $Contrast
     */
    protected $Contrast = null;

    /**
     * @var ExposureOptions $Exposure
     */
    protected $Exposure = null;

    /**
     * @var FocusOptions $Focus
     */
    protected $Focus = null;

    /**
     * @var IrCutFilterMode[] $IrCutFilterModes
     */
    protected $IrCutFilterModes = null;

    /**
     * @var FloatRange $Sharpness
     */
    protected $Sharpness = null;

    /**
     * @var WideDynamicRangeOptions $WideDynamicRange
     */
    protected $WideDynamicRange = null;

    /**
     * @var WhiteBalanceOptions $WhiteBalance
     */
    protected $WhiteBalance = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param BacklightCompensationOptions $BacklightCompensation
     * @param FloatRange $Brightness
     * @param FloatRange $ColorSaturation
     * @param FloatRange $Contrast
     * @param ExposureOptions $Exposure
     * @param FocusOptions $Focus
     * @param IrCutFilterMode[] $IrCutFilterModes
     * @param FloatRange $Sharpness
     * @param WideDynamicRangeOptions $WideDynamicRange
     * @param WhiteBalanceOptions $WhiteBalance
     * @param string $any
     */
    public function __construct($BacklightCompensation, $Brightness, $ColorSaturation, $Contrast, $Exposure, $Focus, array $IrCutFilterModes, $Sharpness, $WideDynamicRange, $WhiteBalance, $any)
    {
      $this->BacklightCompensation = $BacklightCompensation;
      $this->Brightness = $Brightness;
      $this->ColorSaturation = $ColorSaturation;
      $this->Contrast = $Contrast;
      $this->Exposure = $Exposure;
      $this->Focus = $Focus;
      $this->IrCutFilterModes = $IrCutFilterModes;
      $this->Sharpness = $Sharpness;
      $this->WideDynamicRange = $WideDynamicRange;
      $this->WhiteBalance = $WhiteBalance;
      $this->any = $any;
    }

    /**
     * @return BacklightCompensationOptions
     */
    public function getBacklightCompensation()
    {
      return $this->BacklightCompensation;
    }

    /**
     * @param BacklightCompensationOptions $BacklightCompensation
     * @return ImagingOptions
     */
    public function setBacklightCompensation($BacklightCompensation)
    {
      $this->BacklightCompensation = $BacklightCompensation;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getBrightness()
    {
      return $this->Brightness;
    }

    /**
     * @param FloatRange $Brightness
     * @return ImagingOptions
     */
    public function setBrightness($Brightness)
    {
      $this->Brightness = $Brightness;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getColorSaturation()
    {
      return $this->ColorSaturation;
    }

    /**
     * @param FloatRange $ColorSaturation
     * @return ImagingOptions
     */
    public function setColorSaturation($ColorSaturation)
    {
      $this->ColorSaturation = $ColorSaturation;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getContrast()
    {
      return $this->Contrast;
    }

    /**
     * @param FloatRange $Contrast
     * @return ImagingOptions
     */
    public function setContrast($Contrast)
    {
      $this->Contrast = $Contrast;
      return $this;
    }

    /**
     * @return ExposureOptions
     */
    public function getExposure()
    {
      return $this->Exposure;
    }

    /**
     * @param ExposureOptions $Exposure
     * @return ImagingOptions
     */
    public function setExposure($Exposure)
    {
      $this->Exposure = $Exposure;
      return $this;
    }

    /**
     * @return FocusOptions
     */
    public function getFocus()
    {
      return $this->Focus;
    }

    /**
     * @param FocusOptions $Focus
     * @return ImagingOptions
     */
    public function setFocus($Focus)
    {
      $this->Focus = $Focus;
      return $this;
    }

    /**
     * @return IrCutFilterMode[]
     */
    public function getIrCutFilterModes()
    {
      return $this->IrCutFilterModes;
    }

    /**
     * @param IrCutFilterMode[] $IrCutFilterModes
     * @return ImagingOptions
     */
    public function setIrCutFilterModes(array $IrCutFilterModes)
    {
      $this->IrCutFilterModes = $IrCutFilterModes;
      return $this;
    }

    /**
     * @return FloatRange
     */
    public function getSharpness()
    {
      return $this->Sharpness;
    }

    /**
     * @param FloatRange $Sharpness
     * @return ImagingOptions
     */
    public function setSharpness($Sharpness)
    {
      $this->Sharpness = $Sharpness;
      return $this;
    }

    /**
     * @return WideDynamicRangeOptions
     */
    public function getWideDynamicRange()
    {
      return $this->WideDynamicRange;
    }

    /**
     * @param WideDynamicRangeOptions $WideDynamicRange
     * @return ImagingOptions
     */
    public function setWideDynamicRange($WideDynamicRange)
    {
      $this->WideDynamicRange = $WideDynamicRange;
      return $this;
    }

    /**
     * @return WhiteBalanceOptions
     */
    public function getWhiteBalance()
    {
      return $this->WhiteBalance;
    }

    /**
     * @param WhiteBalanceOptions $WhiteBalance
     * @return ImagingOptions
     */
    public function setWhiteBalance($WhiteBalance)
    {
      $this->WhiteBalance = $WhiteBalance;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return ImagingOptions
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
