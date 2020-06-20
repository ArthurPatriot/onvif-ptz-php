<?php

class FindRecordingResultList
{

    /**
     * @var SearchState $SearchState
     */
    protected $SearchState = null;

    /**
     * @var RecordingInformation[] $RecordingInformation
     */
    protected $RecordingInformation = null;

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
     * @return FindRecordingResultList
     */
    public function setSearchState($SearchState)
    {
      $this->SearchState = $SearchState;
      return $this;
    }

    /**
     * @return RecordingInformation[]
     */
    public function getRecordingInformation()
    {
      return $this->RecordingInformation;
    }

    /**
     * @param RecordingInformation[] $RecordingInformation
     * @return FindRecordingResultList
     */
    public function setRecordingInformation(array $RecordingInformation = null)
    {
      $this->RecordingInformation = $RecordingInformation;
      return $this;
    }

}
