<?php

class FloatRange
{

    /**
     * @var float $Min
     */
    protected $Min = null;

    /**
     * @var float $Max
     */
    protected $Max = null;

    /**
     * @param float $Min
     * @param float $Max
     */
    public function __construct($Min, $Max)
    {
      $this->Min = $Min;
      $this->Max = $Max;
    }

    /**
     * @return float
     */
    public function getMin()
    {
      return $this->Min;
    }

    /**
     * @param float $Min
     * @return FloatRange
     */
    public function setMin($Min)
    {
      $this->Min = $Min;
      return $this;
    }

    /**
     * @return float
     */
    public function getMax()
    {
      return $this->Max;
    }

    /**
     * @param float $Max
     * @return FloatRange
     */
    public function setMax($Max)
    {
      $this->Max = $Max;
      return $this;
    }

}
