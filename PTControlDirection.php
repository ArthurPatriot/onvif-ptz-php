<?php

class PTControlDirection
{

    /**
     * @var EFlip $EFlip
     */
    protected $EFlip = null;

    /**
     * @var Reverse $Reverse
     */
    protected $Reverse = null;

    /**
     * @var PTControlDirectionExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EFlip
     */
    public function getEFlip()
    {
      return $this->EFlip;
    }

    /**
     * @param EFlip $EFlip
     * @return PTControlDirection
     */
    public function setEFlip($EFlip)
    {
      $this->EFlip = $EFlip;
      return $this;
    }

    /**
     * @return Reverse
     */
    public function getReverse()
    {
      return $this->Reverse;
    }

    /**
     * @param Reverse $Reverse
     * @return PTControlDirection
     */
    public function setReverse($Reverse)
    {
      $this->Reverse = $Reverse;
      return $this;
    }

    /**
     * @return PTControlDirectionExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PTControlDirectionExtension $Extension
     * @return PTControlDirection
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
