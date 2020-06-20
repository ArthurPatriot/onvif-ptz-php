<?php

class AudioSourceConfigurationOptions
{

    /**
     * @var ReferenceToken[] $InputTokensAvailable
     */
    protected $InputTokensAvailable = null;

    /**
     * @var AudioSourceOptionsExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param ReferenceToken[] $InputTokensAvailable
     */
    public function __construct(array $InputTokensAvailable)
    {
      $this->InputTokensAvailable = $InputTokensAvailable;
    }

    /**
     * @return ReferenceToken[]
     */
    public function getInputTokensAvailable()
    {
      return $this->InputTokensAvailable;
    }

    /**
     * @param ReferenceToken[] $InputTokensAvailable
     * @return AudioSourceConfigurationOptions
     */
    public function setInputTokensAvailable(array $InputTokensAvailable)
    {
      $this->InputTokensAvailable = $InputTokensAvailable;
      return $this;
    }

    /**
     * @return AudioSourceOptionsExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param AudioSourceOptionsExtension $Extension
     * @return AudioSourceConfigurationOptions
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
