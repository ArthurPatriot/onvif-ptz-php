<?php

class CertificateGenerationParameters
{

    /**
     * @var string $CertificateID
     */
    protected $CertificateID = null;

    /**
     * @var string $Subject
     */
    protected $Subject = null;

    /**
     * @var string $ValidNotBefore
     */
    protected $ValidNotBefore = null;

    /**
     * @var string $ValidNotAfter
     */
    protected $ValidNotAfter = null;

    /**
     * @var CertificateGenerationParametersExtension $Extension
     */
    protected $Extension = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getCertificateID()
    {
      return $this->CertificateID;
    }

    /**
     * @param string $CertificateID
     * @return CertificateGenerationParameters
     */
    public function setCertificateID($CertificateID)
    {
      $this->CertificateID = $CertificateID;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->Subject;
    }

    /**
     * @param string $Subject
     * @return CertificateGenerationParameters
     */
    public function setSubject($Subject)
    {
      $this->Subject = $Subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getValidNotBefore()
    {
      return $this->ValidNotBefore;
    }

    /**
     * @param string $ValidNotBefore
     * @return CertificateGenerationParameters
     */
    public function setValidNotBefore($ValidNotBefore)
    {
      $this->ValidNotBefore = $ValidNotBefore;
      return $this;
    }

    /**
     * @return string
     */
    public function getValidNotAfter()
    {
      return $this->ValidNotAfter;
    }

    /**
     * @param string $ValidNotAfter
     * @return CertificateGenerationParameters
     */
    public function setValidNotAfter($ValidNotAfter)
    {
      $this->ValidNotAfter = $ValidNotAfter;
      return $this;
    }

    /**
     * @return CertificateGenerationParametersExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param CertificateGenerationParametersExtension $Extension
     * @return CertificateGenerationParameters
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
