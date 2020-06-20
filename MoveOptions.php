<?php

class MoveOptions
{

    /**
     * @var AbsoluteFocusOptions $Absolute
     */
    protected $Absolute = null;

    /**
     * @var RelativeFocusOptions $Relative
     */
    protected $Relative = null;

    /**
     * @var ContinuousFocusOptions $Continuous
     */
    protected $Continuous = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AbsoluteFocusOptions
     */
    public function getAbsolute()
    {
      return $this->Absolute;
    }

    /**
     * @param AbsoluteFocusOptions $Absolute
     * @return MoveOptions
     */
    public function setAbsolute($Absolute)
    {
      $this->Absolute = $Absolute;
      return $this;
    }

    /**
     * @return RelativeFocusOptions
     */
    public function getRelative()
    {
      return $this->Relative;
    }

    /**
     * @param RelativeFocusOptions $Relative
     * @return MoveOptions
     */
    public function setRelative($Relative)
    {
      $this->Relative = $Relative;
      return $this;
    }

    /**
     * @return ContinuousFocusOptions
     */
    public function getContinuous()
    {
      return $this->Continuous;
    }

    /**
     * @param ContinuousFocusOptions $Continuous
     * @return MoveOptions
     */
    public function setContinuous($Continuous)
    {
      $this->Continuous = $Continuous;
      return $this;
    }

}
