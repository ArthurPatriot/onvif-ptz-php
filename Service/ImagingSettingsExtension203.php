<?php

class ImagingSettingsExtension203
{

    /**
     * @var ToneCompensation $ToneCompensation
     */
    protected $ToneCompensation = null;

    /**
     * @var Defogging $Defogging
     */
    protected $Defogging = null;

    /**
     * @var NoiseReduction $NoiseReduction
     */
    protected $NoiseReduction = null;

    /**
     * @var ImagingSettingsExtension204 $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ToneCompensation
     */
    public function getToneCompensation()
    {
      return $this->ToneCompensation;
    }

    /**
     * @param ToneCompensation $ToneCompensation
     * @return ImagingSettingsExtension203
     */
    public function setToneCompensation($ToneCompensation)
    {
      $this->ToneCompensation = $ToneCompensation;
      return $this;
    }

    /**
     * @return Defogging
     */
    public function getDefogging()
    {
      return $this->Defogging;
    }

    /**
     * @param Defogging $Defogging
     * @return ImagingSettingsExtension203
     */
    public function setDefogging($Defogging)
    {
      $this->Defogging = $Defogging;
      return $this;
    }

    /**
     * @return NoiseReduction
     */
    public function getNoiseReduction()
    {
      return $this->NoiseReduction;
    }

    /**
     * @param NoiseReduction $NoiseReduction
     * @return ImagingSettingsExtension203
     */
    public function setNoiseReduction($NoiseReduction)
    {
      $this->NoiseReduction = $NoiseReduction;
      return $this;
    }

    /**
     * @return ImagingSettingsExtension204
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param ImagingSettingsExtension204 $Extension
     * @return ImagingSettingsExtension203
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
