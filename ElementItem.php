<?php

class ElementItem
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param string $any
     * @param string $Name
     */
    public function __construct($any, $Name)
    {
      $this->any = $any;
      $this->Name = $Name;
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
     * @return ElementItem
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
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
     * @return ElementItem
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
