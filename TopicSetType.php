<?php

class TopicSetType extends ExtensibleDocumented
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param string $any
     */
    public function __construct($any)
    {
      parent::__construct();
      $this->any = $any;
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
     * @return TopicSetType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
