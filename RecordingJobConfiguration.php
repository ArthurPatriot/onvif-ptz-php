<?php

class RecordingJobConfiguration
{

    /**
     * @var RecordingReference $RecordingToken
     */
    protected $RecordingToken = null;

    /**
     * @var RecordingJobMode $Mode
     */
    protected $Mode = null;

    /**
     * @var int $Priority
     */
    protected $Priority = null;

    /**
     * @var RecordingJobSource[] $Source
     */
    protected $Source = null;

    /**
     * @var RecordingJobConfigurationExtension $Extension
     */
    protected $Extension = null;

    /**
     * @var UNKNOWN $ScheduleToken
     */
    protected $ScheduleToken = null;

    /**
     * @param RecordingReference $RecordingToken
     * @param RecordingJobMode $Mode
     * @param int $Priority
     * @param UNKNOWN $ScheduleToken
     */
    public function __construct($RecordingToken, $Mode, $Priority, $ScheduleToken)
    {
      $this->RecordingToken = $RecordingToken;
      $this->Mode = $Mode;
      $this->Priority = $Priority;
      $this->ScheduleToken = $ScheduleToken;
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
     * @return RecordingJobConfiguration
     */
    public function setRecordingToken($RecordingToken)
    {
      $this->RecordingToken = $RecordingToken;
      return $this;
    }

    /**
     * @return RecordingJobMode
     */
    public function getMode()
    {
      return $this->Mode;
    }

    /**
     * @param RecordingJobMode $Mode
     * @return RecordingJobConfiguration
     */
    public function setMode($Mode)
    {
      $this->Mode = $Mode;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->Priority;
    }

    /**
     * @param int $Priority
     * @return RecordingJobConfiguration
     */
    public function setPriority($Priority)
    {
      $this->Priority = $Priority;
      return $this;
    }

    /**
     * @return RecordingJobSource[]
     */
    public function getSource()
    {
      return $this->Source;
    }

    /**
     * @param RecordingJobSource[] $Source
     * @return RecordingJobConfiguration
     */
    public function setSource(array $Source = null)
    {
      $this->Source = $Source;
      return $this;
    }

    /**
     * @return RecordingJobConfigurationExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param RecordingJobConfigurationExtension $Extension
     * @return RecordingJobConfiguration
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

    /**
     * @return UNKNOWN
     */
    public function getScheduleToken()
    {
      return $this->ScheduleToken;
    }

    /**
     * @param UNKNOWN $ScheduleToken
     * @return RecordingJobConfiguration
     */
    public function setScheduleToken($ScheduleToken)
    {
      $this->ScheduleToken = $ScheduleToken;
      return $this;
    }

}
