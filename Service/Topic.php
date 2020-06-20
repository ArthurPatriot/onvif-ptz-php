<?php

class Topic
{

    /**
     * @var ConcreteTopicExpression $parent
     */
    protected $parent = null;

    /**
     * @param ConcreteTopicExpression $parent
     */
    public function __construct($parent)
    {
      $this->parent = $parent;
    }

    /**
     * @return ConcreteTopicExpression
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param ConcreteTopicExpression $parent
     * @return Topic
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

}
