<?php

class GetPresetsResponse
{

    /**
     * @var PTZPreset $Preset
     */
    protected $Preset = null;

    /**
     * @param PTZPreset $Preset
     */
    public function __construct($Preset)
    {
      $this->Preset = $Preset;
    }

    /**
     * @return PTZPreset
     */
    public function getPreset()
    {
      return $this->Preset;
    }

    /**
     * @param PTZPreset $Preset
     * @return GetPresetsResponse
     */
    public function setPreset($Preset)
    {
      $this->Preset = $Preset;
      return $this;
    }

}
