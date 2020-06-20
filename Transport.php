<?php

class Transport
{

    /**
     * @var TransportProtocol $Protocol
     */
    protected $Protocol = null;

    /**
     * @var Transport $Tunnel
     */
    protected $Tunnel = null;

    /**
     * @param TransportProtocol $Protocol
     */
    public function __construct($Protocol)
    {
      $this->Protocol = $Protocol;
    }

    /**
     * @return TransportProtocol
     */
    public function getProtocol()
    {
      return $this->Protocol;
    }

    /**
     * @param TransportProtocol $Protocol
     * @return Transport
     */
    public function setProtocol($Protocol)
    {
      $this->Protocol = $Protocol;
      return $this;
    }

    /**
     * @return Transport
     */
    public function getTunnel()
    {
      return $this->Tunnel;
    }

    /**
     * @param Transport $Tunnel
     * @return Transport
     */
    public function setTunnel($Tunnel)
    {
      $this->Tunnel = $Tunnel;
      return $this;
    }

}
