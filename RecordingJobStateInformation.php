<?php

class RecordingJobStateInformation
{

    /**
     * @var RecordingReference $RecordingToken
     */
    protected $RecordingToken = null;

    /**
     * @var RecordingJobState $State
     */
    protected $State = null;

    /**
     * @var RecordingJobStateSource[] $Sources
     */
    protected $Sources = null;

    /**
     * @var RecordingJobStateInformationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param RecordingReference $RecordingToken
     * @param RecordingJobState $State
     */
    public function __construct($RecordingToken, $State)
    {
      $this->RecordingToken = $RecordingToken;
      $this->State = $State;
    }

    /**
     * @return RecordingReference
     */
    public function getRecordingToken()
    {
      return $this->RecordingToken;
    }

    /**
     * @param RecordingReference $RecordingToken
     * @return RecordingJobStateInformation
     */
    public function setRecordingToken($RecordingToken)
    {
      $this->RecordingToken = $RecordingToken;
      return $this;
    }

    /**
     * @return RecordingJobState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param RecordingJobState $State
     * @return RecordingJobStateInformation
     */
    public function setState($State)
    {
      $this->State = $State;
      return $this;
    }

    /**
     * @return RecordingJobStateSource[]
     */
    public function getSources()
    {
      return $this->Sources;
    }

    /**
     * @param RecordingJobStateSource[] $Sources
     * @return RecordingJobStateInformation
     */
    public function setSources(array $Sources = null)
    {
      $this->Sources = $Sources;
      return $this;
    }

    /**
     * @return RecordingJobStateInformationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param RecordingJobStateInformationExtension $Extension
     * @return RecordingJobStateInformation
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
