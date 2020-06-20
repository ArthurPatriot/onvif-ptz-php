<?php

class MoveOptions20
{

    /**
     * @var AbsoluteFocusOptions $Absolute
     */
    protected $Absolute = null;

    /**
     * @var RelativeFocusOptions20 $Relative
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
     * @return MoveOptions20
     */
    public function setAbsolute($Absolute)
    {
      $this->Absolute = $Absolute;
      return $this;
    }

    /**
     * @return RelativeFocusOptions20
     */
    public function getRelative()
    {
      return $this->Relative;
    }

    /**
     * @param RelativeFocusOptions20 $Relative
     * @return MoveOptions20
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
     * @return MoveOptions20
     */
    public function setContinuous($Continuous)
    {
      $this->Continuous = $Continuous;
      return $this;
    }

}
