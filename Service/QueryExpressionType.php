<?php

class QueryExpressionType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var anyURI $Dialect
     */
    protected $Dialect = null;

    /**
     * @param string $any
     * @param anyURI $Dialect
     */
    public function __construct($any, $Dialect)
    {
      $this->any = $any;
      $this->Dialect = $Dialect;
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
     * @return QueryExpressionType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getDialect()
    {
      return $this->Dialect;
    }

    /**
     * @param anyURI $Dialect
     * @return QueryExpressionType
     */
    public function setDialect($Dialect)
    {
      $this->Dialect = $Dialect;
      return $this;
    }

}
