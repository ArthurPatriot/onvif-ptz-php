<?php

class GetNodeResponse
{

    /**
     * @var PTZNode $PTZNode
     */
    protected $PTZNode = null;

    /**
     * @param PTZNode $PTZNode
     */
    public function __construct($PTZNode)
    {
      $this->PTZNode = $PTZNode;
    }

    /**
     * @return PTZNode
     */
    public function getPTZNode()
    {
      return $this->PTZNode;
    }

    /**
     * @param PTZNode $PTZNode
     * @return GetNodeResponse
     */
    public function setPTZNode($PTZNode)
    {
      $this->PTZNode = $PTZNode;
      return $this;
    }

}
