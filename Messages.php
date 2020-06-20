<?php

class Messages
{

    /**
     * @var string $ParentTopic
     */
    protected $ParentTopic = null;

    /**
     * @param string $ParentTopic
     */
    public function __construct($ParentTopic)
    {
      $this->ParentTopic = $ParentTopic;
    }

    /**
     * @return string
     */
    public function getParentTopic()
    {
      return $this->ParentTopic;
    }

    /**
     * @param string $ParentTopic
     * @return Messages
     */
    public function setParentTopic($ParentTopic)
    {
      $this->ParentTopic = $ParentTopic;
      return $this;
    }

}
