<?php

class GetCurrentMessage
{

    /**
     * @var TopicExpressionType $Topic
     */
    protected $Topic = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param TopicExpressionType $Topic
     * @param string $any
     */
    public function __construct($Topic, $any)
    {
      $this->Topic = $Topic;
      $this->any = $any;
    }

    /**
     * @return TopicExpressionType
     */
    public function getTopic()
    {
      return $this->Topic;
    }

    /**
     * @param TopicExpressionType $Topic
     * @return GetCurrentMessage
     */
    public function setTopic($Topic)
    {
      $this->Topic = $Topic;
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
     * @return GetCurrentMessage
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
