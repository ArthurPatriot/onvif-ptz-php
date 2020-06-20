<?php

class GetPresetTourResponse
{

    /**
     * @var PresetTour $PresetTour
     */
    protected $PresetTour = null;

    /**
     * @param PresetTour $PresetTour
     */
    public function __construct($PresetTour)
    {
      $this->PresetTour = $PresetTour;
    }

    /**
     * @return PresetTour
     */
    public function getPresetTour()
    {
      return $this->PresetTour;
    }

    /**
     * @param PresetTour $PresetTour
     * @return GetPresetTourResponse
     */
    public function setPresetTour($PresetTour)
    {
      $this->PresetTour = $PresetTour;
      return $this;
    }

}
