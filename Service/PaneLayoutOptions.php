<?php

class PaneLayoutOptions
{

    /**
     * @var Rectangle[] $Area
     */
    protected $Area = null;

    /**
     * @var PaneOptionExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param Rectangle[] $Area
     */
    public function __construct(array $Area)
    {
      $this->Area = $Area;
    }

    /**
     * @return Rectangle[]
     */
    public function getArea()
    {
      return $this->Area;
    }

    /**
     * @param Rectangle[] $Area
     * @return PaneLayoutOptions
     */
    public function setArea(array $Area)
    {
      $this->Area = $Area;
      return $this;
    }

    /**
     * @return PaneOptionExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PaneOptionExtension $Extension
     * @return PaneLayoutOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
