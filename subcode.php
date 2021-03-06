<?php

class subcode
{

    /**
     * @var QName $Value
     */
    protected $Value = null;

    /**
     * @var subcode $Subcode
     */
    protected $Subcode = null;

    /**
     * @param QName $Value
     */
    public function __construct($Value)
    {
      $this->Value = $Value;
    }

    /**
     * @return QName
     */
    public function getValue()
    {
      return $this->Value;
    }

    /**
     * @param QName $Value
     * @return subcode
     */
    public function setValue($Value)
    {
      $this->Value = $Value;
      return $this;
    }

    /**
     * @return subcode
     */
    public function getSubcode()
    {
      return $this->Subcode;
    }

    /**
     * @param subcode $Subcode
     * @return subcode
     */
    public function setSubcode($Subcode)
    {
      $this->Subcode = $Subcode;
      return $this;
    }

}
