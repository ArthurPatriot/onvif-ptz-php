<?php

class PTZPresetTourSupported
{

    /**
     * @var int $MaximumNumberOfPresetTours
     */
    protected $MaximumNumberOfPresetTours = null;

    /**
     * @var PTZPresetTourOperation[] $PTZPresetTourOperation
     */
    protected $PTZPresetTourOperation = null;

    /**
     * @var PTZPresetTourSupportedExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param int $MaximumNumberOfPresetTours
     */
    public function __construct($MaximumNumberOfPresetTours)
    {
      $this->MaximumNumberOfPresetTours = $MaximumNumberOfPresetTours;
    }

    /**
     * @return int
     */
    public function getMaximumNumberOfPresetTours()
    {
      return $this->MaximumNumberOfPresetTours;
    }

    /**
     * @param int $MaximumNumberOfPresetTours
     * @return PTZPresetTourSupported
     */
    public function setMaximumNumberOfPresetTours($MaximumNumberOfPresetTours)
    {
      $this->MaximumNumberOfPresetTours = $MaximumNumberOfPresetTours;
      return $this;
    }

    /**
     * @return PTZPresetTourOperation[]
     */
    public function getPTZPresetTourOperation()
    {
      return $this->PTZPresetTourOperation;
    }

    /**
     * @param PTZPresetTourOperation[] $PTZPresetTourOperation
     * @return PTZPresetTourSupported
     */
    public function setPTZPresetTourOperation(array $PTZPresetTourOperation = null)
    {
      $this->PTZPresetTourOperation = $PTZPresetTourOperation;
      return $this;
    }

    /**
     * @return PTZPresetTourSupportedExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTZPresetTourSupportedExtension $Extension
     * @return PTZPresetTourSupported
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
