<?php

class NotificationProducerRP
{

    /**
     * @var TopicExpressionType $TopicExpression
     */
    protected $TopicExpression = null;

    /**
     * @var boolean $FixedTopicSet
     */
    protected $FixedTopicSet = null;

    /**
     * @var anyURI $TopicExpressionDialect
     */
    protected $TopicExpressionDialect = null;

    /**
     * @var TopicSetType $TopicSet
     */
    protected $TopicSet = null;

    /**
     * @param TopicExpressionType $TopicExpression
     * @param boolean $FixedTopicSet
     * @param anyURI $TopicExpressionDialect
     * @param TopicSetType $TopicSet
     */
    public function __construct($TopicExpression, $FixedTopicSet, $TopicExpressionDialect, $TopicSet)
    {
      $this->TopicExpression = $TopicExpression;
      $this->FixedTopicSet = $FixedTopicSet;
      $this->TopicExpressionDialect = $TopicExpressionDialect;
      $this->TopicSet = $TopicSet;
    }

    /**
     * @return TopicExpressionType
     */
    public function getTopicExpression()
    {
      return $this->TopicExpression;
    }

    /**
     * @param TopicExpressionType $TopicExpression
     * @return NotificationProducerRP
     */
    public function setTopicExpression($TopicExpression)
    {
      $this->TopicExpression = $TopicExpression;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFixedTopicSet()
    {
      return $this->FixedTopicSet;
    }

    /**
     * @param boolean $FixedTopicSet
     * @return NotificationProducerRP
     */
    public function setFixedTopicSet($FixedTopicSet)
    {
      $this->FixedTopicSet = $FixedTopicSet;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getTopicExpressionDialect()
    {
      return $this->TopicExpressionDialect;
    }

    /**
     * @param anyURI $TopicExpressionDialect
     * @return NotificationProducerRP
     */
    public function setTopicExpressionDialect($TopicExpressionDialect)
    {
      $this->TopicExpressionDialect = $TopicExpressionDialect;
      return $this;
    }

    /**
     * @return TopicSetType
     */
    public function getTopicSet()
    {
      return $this->TopicSet;
    }

    /**
     * @param TopicSetType $TopicSet
     * @return NotificationProducerRP
     */
    public function setTopicSet($TopicSet)
    {
      $this->TopicSet = $TopicSet;
      return $this;
    }

}
