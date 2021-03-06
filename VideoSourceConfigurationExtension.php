<?php

class VideoSourceConfigurationExtension
{

    /**
     * @var Rotate $Rotate
     */
    protected $Rotate = null;

    /**
     * @var VideoSourceConfigurationExtension2 $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Rotate
     */
    public function getRotate()
    {
      return $this->Rotate;
    }

    /**
     * @param Rotate $Rotate
     * @return VideoSourceConfigurationExtension
     */
    public function setRotate($Rotate)
    {
      $this->Rotate = $Rotate;
      return $this;
    }

    /**
     * @return VideoSourceConfigurationExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param VideoSourceConfigurationExtension2 $Extension
     * @return VideoSourceConfigurationExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
