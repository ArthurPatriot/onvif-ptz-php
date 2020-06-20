<?php

class Stop
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var boolean $PanTilt
     */
    protected $PanTilt = null;

    /**
     * @var boolean $Zoom
     */
    protected $Zoom = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param boolean $PanTilt
     * @param boolean $Zoom
     */
    public function __construct($ProfileToken, $PanTilt, $Zoom)
    {
      $this->ProfileToken = $ProfileToken;
      $this->PanTilt = $PanTilt;
      $this->Zoom = $Zoom;
    }

    /**
     * @return ReferenceToken
     */
    public function getProfileToken()
    {
      return $this->ProfileToken;
    }

    /**
     * @param ReferenceToken $ProfileToken
     * @return Stop
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPanTilt()
    {
      return $this->PanTilt;
    }

    /**
     * @param boolean $PanTilt
     * @return Stop
     */
    public function setPanTilt($PanTilt)
    {
      $this->PanTilt = $PanTilt;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getZoom()
    {
      return $this->Zoom;
    }

    /**
     * @param boolean $Zoom
     * @return Stop
     */
    public function setZoom($Zoom)
    {
      $this->Zoom = $Zoom;
      return $this;
    }

}
