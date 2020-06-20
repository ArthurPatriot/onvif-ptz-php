<?php

class RecordingJobStateTracks
{

    /**
     * @var RecordingJobStateTrack[] $Track
     */
    protected $Track = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordingJobStateTrack[]
     */
    public function getTrack()
    {
      return $this->Track;
    }

    /**
     * @param RecordingJobStateTrack[] $Track
     * @return RecordingJobStateTracks
     */
    public function setTrack(array $Track = null)
    {
      $this->Track = $Track;
      return $this;
    }

}
