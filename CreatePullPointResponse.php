<?php

class CreatePullPointResponse
{

    /**
     * @var EndpointReferenceType $PullPoint
     */
    protected $PullPoint = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param EndpointReferenceType $PullPoint
     * @param string $any
     */
    public function __construct($PullPoint, $any)
    {
      $this->PullPoint = $PullPoint;
      $this->any = $any;
    }

    /**
     * @return EndpointReferenceType
     */
    public function getPullPoint()
    {
      return $this->PullPoint;
    }

    /**
     * @param EndpointReferenceType $PullPoint
     * @return CreatePullPointResponse
     */
    public function setPullPoint($PullPoint)
    {
      $this->PullPoint = $PullPoint;
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
     * @return CreatePullPointResponse
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
