<?php

class GetNode
{

    /**
     * @var ReferenceToken $NodeToken
     */
    protected $NodeToken = null;

    /**
     * @param ReferenceToken $NodeToken
     */
    public function __construct($NodeToken)
    {
      $this->NodeToken = $NodeToken;
    }

    /**
     * @return ReferenceToken
     */
    public function getNodeToken()
    {
      return $this->NodeToken;
    }

    /**
     * @param ReferenceToken $NodeToken
     * @return GetNode
     */
    public function setNodeToken($NodeToken)
    {
      $this->NodeToken = $NodeToken;
      return $this;
    }

}
