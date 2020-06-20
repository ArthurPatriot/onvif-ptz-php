<?php

class PolylineArray
{

    /**
     * @var Polyline[] $Segment
     */
    protected $Segment = null;

    /**
     * @var PolylineArrayExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param Polyline[] $Segment
     */
    public function __construct(array $Segment)
    {
      $this->Segment = $Segment;
    }

    /**
     * @return Polyline[]
     */
    public function getSegment()
    {
      return $this->Segment;
    }

    /**
     * @param Polyline[] $Segment
     * @return PolylineArray
     */
    public function setSegment(array $Segment)
    {
      $this->Segment = $Segment;
      return $this;
    }

    /**
     * @return PolylineArrayExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param PolylineArrayExtension $Extension
     * @return PolylineArray
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
