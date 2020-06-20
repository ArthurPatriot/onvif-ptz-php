<?php

class Capabilities
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var boolean $EFlip
     */
    protected $EFlip = null;

    /**
     * @var boolean $Reverse
     */
    protected $Reverse = null;

    /**
     * @var boolean $GetCompatibleConfigurations
     */
    protected $GetCompatibleConfigurations = null;

    /**
     * @var boolean $MoveStatus
     */
    protected $MoveStatus = null;

    /**
     * @var boolean $StatusPosition
     */
    protected $StatusPosition = null;

    /**
     * @param string $any
     * @param boolean $EFlip
     * @param boolean $Reverse
     * @param boolean $GetCompatibleConfigurations
     * @param boolean $MoveStatus
     * @param boolean $StatusPosition
     */
    public function __construct($any, $EFlip, $Reverse, $GetCompatibleConfigurations, $MoveStatus, $StatusPosition)
    {
      $this->any = $any;
      $this->EFlip = $EFlip;
      $this->Reverse = $Reverse;
      $this->GetCompatibleConfigurations = $GetCompatibleConfigurations;
      $this->MoveStatus = $MoveStatus;
      $this->StatusPosition = $StatusPosition;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return Capabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEFlip()
    {
      return $this->EFlip;
    }

    /**
     * @param boolean $EFlip
     * @return Capabilities
     */
    public function setEFlip($EFlip)
    {
      $this->EFlip = $EFlip;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReverse()
    {
      return $this->Reverse;
    }

    /**
     * @param boolean $Reverse
     * @return Capabilities
     */
    public function setReverse($Reverse)
    {
      $this->Reverse = $Reverse;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGetCompatibleConfigurations()
    {
      return $this->GetCompatibleConfigurations;
    }

    /**
     * @param boolean $GetCompatibleConfigurations
     * @return Capabilities
     */
    public function setGetCompatibleConfigurations($GetCompatibleConfigurations)
    {
      $this->GetCompatibleConfigurations = $GetCompatibleConfigurations;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMoveStatus()
    {
      return $this->MoveStatus;
    }

    /**
     * @param boolean $MoveStatus
     * @return Capabilities
     */
    public function setMoveStatus($MoveStatus)
    {
      $this->MoveStatus = $MoveStatus;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStatusPosition()
    {
      return $this->StatusPosition;
    }

    /**
     * @param boolean $StatusPosition
     * @return Capabilities
     */
    public function setStatusPosition($StatusPosition)
    {
      $this->StatusPosition = $StatusPosition;
      return $this;
    }

}
