<?php

class FindPTZPositionResultList
{

    /**
     * @var SearchState $SearchState
     */
    protected $SearchState = null;

    /**
     * @var FindPTZPositionResult[] $Result
     */
    protected $Result = null;

    /**
     * @param SearchState $SearchState
     */
    public function __construct($SearchState)
    {
      $this->SearchState = $SearchState;
    }

    /**
     * @return SearchState
     */
    public function getSearchState()
    {
      return $this->SearchState;
    }

    /**
     * @param SearchState $SearchState
     * @return FindPTZPositionResultList
     */
    public function setSearchState($SearchState)
    {
      $this->SearchState = $SearchState;
      return $this;
    }

    /**
     * @return FindPTZPositionResult[]
     */
    public function getResult()
    {
      return $this->Result;
    }

    /**
     * @param FindPTZPositionResult[] $Result
     * @return FindPTZPositionResultList
     */
    public function setResult(array $Result = null)
    {
      $this->Result = $Result;
      return $this;
    }

}
