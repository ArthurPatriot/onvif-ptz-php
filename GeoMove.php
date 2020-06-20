<?php

class GeoMove
{

    /**
     * @var ReferenceToken $ProfileToken
     */
    protected $ProfileToken = null;

    /**
     * @var GeoLocation $Target
     */
    protected $Target = null;

    /**
     * @var PTZSpeed $Speed
     */
    protected $Speed = null;

    /**
     * @var float $AreaHeight
     */
    protected $AreaHeight = null;

    /**
     * @var float $AreaWidth
     */
    protected $AreaWidth = null;

    /**
     * @param ReferenceToken $ProfileToken
     * @param GeoLocation $Target
     * @param PTZSpeed $Speed
     * @param float $AreaHeight
     * @param float $AreaWidth
     */
    public function __construct($ProfileToken, $Target, $Speed, $AreaHeight, $AreaWidth)
    {
      $this->ProfileToken = $ProfileToken;
      $this->Target = $Target;
      $this->Speed = $Speed;
      $this->AreaHeight = $AreaHeight;
      $this->AreaWidth = $AreaWidth;
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
     * @return GeoMove
     */
    public function setProfileToken($ProfileToken)
    {
      $this->ProfileToken = $ProfileToken;
      return $this;
    }

    /**
     * @return GeoLocation
     */
    public function getTarget()
    {
      return $this->Target;
    }

    /**
     * @param GeoLocation $Target
     * @return GeoMove
     */
    public function setTarget($Target)
    {
      $this->Target = $Target;
      return $this;
    }

    /**
     * @return PTZSpeed
     */
    public function getSpeed()
    {
      return $this->Speed;
    }

    /**
     * @param PTZSpeed $Speed
     * @return GeoMove
     */
    public function setSpeed($Speed)
    {
      $this->Speed = $Speed;
      return $this;
    }

    /**
     * @return float
     */
    public function getAreaHeight()
    {
      return $this->AreaHeight;
    }

    /**
     * @param float $AreaHeight
     * @return GeoMove
     */
    public function setAreaHeight($AreaHeight)
    {
      $this->AreaHeight = $AreaHeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getAreaWidth()
    {
      return $this->AreaWidth;
    }

    /**
     * @param float $AreaWidth
     * @return GeoMove
     */
    public function setAreaWidth($AreaWidth)
    {
      $this->AreaWidth = $AreaWidth;
      return $this;
    }

}
