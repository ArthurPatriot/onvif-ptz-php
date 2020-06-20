<?php

class PTZVector
{

    /**
     * @var Vector2D $PanTilt
     */
    protected $PanTilt = null;

    /**
     * @var Vector1D $Zoom
     */
    protected $Zoom = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Vector2D
     */
    public function getPanTilt()
    {
      return $this->PanTilt;
    }

    /**
     * @param Vector2D $PanTilt
     * @return PTZVector
     */
    public function setPanTilt($PanTilt)
    {
      $this->PanTilt = $PanTilt;
      return $this;
    }

    /**
     * @return Vector1D
     */
    public function getZoom()
    {
      return $this->Zoom;
    }

    /**
     * @param Vector1D $Zoom
     * @return PTZVector
     */
    public function setZoom($Zoom)
    {
      $this->Zoom = $Zoom;
      return $this;
    }

}
