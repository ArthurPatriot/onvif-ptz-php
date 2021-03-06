<?php

class ElementItemDescription
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var QName $Type
     */
    protected $Type = null;

    /**
     * @param string $Name
     * @param QName $Type
     */
    public function __construct($Name, $Type)
    {
      $this->Name = $Name;
      $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return ElementItemDescription
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return QName
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param QName $Type
     * @return ElementItemDescription
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
