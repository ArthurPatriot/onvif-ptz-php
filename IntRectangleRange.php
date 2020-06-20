<?php

class IntRectangleRange
{

    /**
     * @var IntRange $XRange
     */
    protected $XRange = null;

    /**
     * @var IntRange $YRange
     */
    protected $YRange = null;

    /**
     * @var IntRange $WidthRange
     */
    protected $WidthRange = null;

    /**
     * @var IntRange $HeightRange
     */
    protected $HeightRange = null;

    /**
     * @param IntRange $XRange
     * @param IntRange $YRange
     * @param IntRange $WidthRange
     * @param IntRange $HeightRange
     */
    public function __construct($XRange, $YRange, $WidthRange, $HeightRange)
    {
      $this->XRange = $XRange;
      $this->YRange = $YRange;
      $this->WidthRange = $WidthRange;
      $this->HeightRange = $HeightRange;
    }

    /**
     * @return IntRange
     */
    public function getXRange()
    {
      return $this->XRange;
    }

    /**
     * @param IntRange $XRange
     * @return IntRectangleRange
     */
    public function setXRange($XRange)
    {
      $this->XRange = $XRange;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getYRange()
    {
      return $this->YRange;
    }

    /**
     * @param IntRange $YRange
     * @return IntRectangleRange
     */
    public function setYRange($YRange)
    {
      $this->YRange = $YRange;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getWidthRange()
    {
      return $this->WidthRange;
    }

    /**
     * @param IntRange $WidthRange
     * @return IntRectangleRange
     */
    public function setWidthRange($WidthRange)
    {
      $this->WidthRange = $WidthRange;
      return $this;
    }

    /**
     * @return IntRange
     */
    public function getHeightRange()
    {
      return $this->HeightRange;
    }

    /**
     * @param IntRange $HeightRange
     * @return IntRectangleRange
     */
    public function setHeightRange($HeightRange)
    {
      $this->HeightRange = $HeightRange;
      return $this;
    }

}
