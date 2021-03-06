<?php

class NotUnderstoodType
{

    /**
     * @var QName $qname
     */
    protected $qname = null;

    /**
     * @param QName $qname
     */
    public function __construct($qname)
    {
      $this->qname = $qname;
    }

    /**
     * @return QName
     */
    public function getQname()
    {
      return $this->qname;
    }

    /**
     * @param QName $qname
     * @return NotUnderstoodType
     */
    public function setQname($qname)
    {
      $this->qname = $qname;
      return $this;
    }

}
