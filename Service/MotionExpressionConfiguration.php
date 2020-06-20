<?php

class MotionExpressionConfiguration
{

    /**
     * @var MotionExpression $MotionExpression
     */
    protected $MotionExpression = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param MotionExpression $MotionExpression
     * @param string $any
     */
    public function __construct($MotionExpression, $any)
    {
      $this->MotionExpression = $MotionExpression;
      $this->any = $any;
    }

    /**
     * @return MotionExpression
     */
    public function getMotionExpression()
    {
      return $this->MotionExpression;
    }

    /**
     * @param MotionExpression $MotionExpression
     * @return MotionExpressionConfiguration
     */
    public function setMotionExpression($MotionExpression)
    {
      $this->MotionExpression = $MotionExpression;
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
     * @return MotionExpressionConfiguration
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
