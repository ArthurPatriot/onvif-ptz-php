<?php

class PTZMoveStatus
{

    /**
     * @var MoveStatus $PanTilt
     */
    protected $PanTilt = null;

    /**
     * @var MoveStatus $Zoom
     */
    protected $Zoom = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return MoveStatus
     */
    public function getPanTilt()
    {
      return $this->PanTilt;
    }

    /**
     * @param MoveStatus $PanTilt
     * @return PTZMoveStatus
     */
    public function setPanTilt($PanTilt)
    {
      $this->PanTilt = $PanTilt;
      return $this;
    }

    /**
     * @return MoveStatus
     */
    public function getZoom()
    {
      return $this->Zoom;
    }

    /**
     * @param MoveStatus $Zoom
     * @return PTZMoveStatus
     */
    public function setZoom($Zoom)
    {
      $this->Zoom = $Zoom;
      return $this;
    }

}
