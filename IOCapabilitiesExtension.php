<?php

class IOCapabilitiesExtension
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var boolean $Auxiliary
     */
    protected $Auxiliary = null;

    /**
     * @var AuxiliaryData[] $AuxiliaryCommands
     */
    protected $AuxiliaryCommands = null;

    /**
     * @var IOCapabilitiesExtension2 $Extension
     */
    protected $Extension = null;

    /**
     * @param string $any
     * @param IOCapabilitiesExtension2 $Extension
     */
    public function __construct($any, $Extension)
    {
      $this->any = $any;
      $this->Extension = $Extension;
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
     * @return IOCapabilitiesExtension
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAuxiliary()
    {
      return $this->Auxiliary;
    }

    /**
     * @param boolean $Auxiliary
     * @return IOCapabilitiesExtension
     */
    public function setAuxiliary($Auxiliary)
    {
      $this->Auxiliary = $Auxiliary;
      return $this;
    }

    /**
     * @return AuxiliaryData[]
     */
    public function getAuxiliaryCommands()
    {
      return $this->AuxiliaryCommands;
    }

    /**
     * @param AuxiliaryData[] $AuxiliaryCommands
     * @return IOCapabilitiesExtension
     */
    public function setAuxiliaryCommands(array $AuxiliaryCommands = null)
    {
      $this->AuxiliaryCommands = $AuxiliaryCommands;
      return $this;
    }

    /**
     * @return IOCapabilitiesExtension2
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param IOCapabilitiesExtension2 $Extension
     * @return IOCapabilitiesExtension
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
