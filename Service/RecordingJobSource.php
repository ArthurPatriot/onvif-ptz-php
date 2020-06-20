<?php

class RecordingJobSource
{

    /**
     * @var SourceReference $SourceToken
     */
    protected $SourceToken = null;

    /**
     * @var boolean $AutoCreateReceiver
     */
    protected $AutoCreateReceiver = null;

    /**
     * @var RecordingJobTrack[] $Tracks
     */
    protected $Tracks = null;

    /**
     * @var RecordingJobSourceExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SourceReference
     */
    public function getSourceToken()
    {
      return $this->SourceToken;
    }

    /**
     * @param SourceReference $SourceToken
     * @return RecordingJobSource
     */
    public function setSourceToken($SourceToken)
    {
      $this->SourceToken = $SourceToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoCreateReceiver()
    {
      return $this->AutoCreateReceiver;
    }

    /**
     * @param boolean $AutoCreateReceiver
     * @return RecordingJobSource
     */
    public function setAutoCreateReceiver($AutoCreateReceiver)
    {
      $this->AutoCreateReceiver = $AutoCreateReceiver;
      return $this;
    }

    /**
     * @return RecordingJobTrack[]
     */
    public function getTracks()
    {
      return $this->Tracks;
    }

    /**
     * @param RecordingJobTrack[] $Tracks
     * @return RecordingJobSource
     */
    public function setTracks(array $Tracks = null)
    {
      $this->Tracks = $Tracks;
      return $this;
    }

    /**
     * @return RecordingJobSourceExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param RecordingJobSourceExtension $Extension
     * @return RecordingJobSource
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
