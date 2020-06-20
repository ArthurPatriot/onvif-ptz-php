<?php

class PolygonConfiguration
{

    /**
     * @var Polygon $Polygon
     */
    protected $Polygon = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param Polygon $Polygon
     * @param string $any
     */
    public function __construct($Polygon, $any)
    {
      $this->Polygon = $Polygon;
      $this->any = $any;
    }

    /**
     * @return Polygon
     */
    public function getPolygon()
    {
      return $this->Polygon;
    }

    /**
     * @param Polygon $Polygon
     * @return PolygonConfiguration
     */
    public function setPolygon($Polygon)
    {
      $this->Polygon = $Polygon;
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
     * @return PolygonConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
