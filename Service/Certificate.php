<?php

class Certificate
{

    /**
     * @var string $CertificateID
     */
    protected $CertificateID = null;

    /**
     * @var BinaryData $Certificate
     */
    protected $Certificate = null;

    /**
     * @param string $CertificateID
     * @param BinaryData $Certificate
     */
    public function __construct($CertificateID, $Certificate)
    {
      $this->CertificateID = $CertificateID;
      $this->Certificate = $Certificate;
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
     * @return Certificate
     */
    public function setCertificateID($CertificateID)
    {
      $this->CertificateID = $CertificateID;
      return $this;
    }

    /**
     * @return BinaryData
     */
    public function getCertificate()
    {
      return $this->Certificate;
    }

    /**
     * @param BinaryData $Certificate
     * @return Certificate
     */
    public function setCertificate($Certificate)
    {
      $this->Certificate = $Certificate;
      return $this;
    }

}
