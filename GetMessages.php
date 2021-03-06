<?php

class GetMessages
{

    /**
     * @var int $MaximumNumber
     */
    protected $MaximumNumber = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param int $MaximumNumber
     * @param string $any
     */
    public function __construct($MaximumNumber, $any)
    {
      $this->MaximumNumber = $MaximumNumber;
      $this->any = $any;
    }

    /**
     * @return int
     */
    public function getMaximumNumber()
    {
      return $this->MaximumNumber;
    }

    /**
     * @param int $MaximumNumber
     * @return GetMessages
     */
    public function setMaximumNumber($MaximumNumber)
    {
      $this->MaximumNumber = $MaximumNumber;
      return $this;
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
     * @return GetMessages
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
