<?php

class SecurityCapabilities
{

    /**
     * @var boolean $TLS11
     */
    protected $TLS11 = null;

    /**
     * @var boolean $TLS12
     */
    protected $TLS12 = null;

    /**
     * @var boolean $OnboardKeyGeneration
     */
    protected $OnboardKeyGeneration = null;

    /**
     * @var boolean $AccessPolicyConfig
     */
    protected $AccessPolicyConfig = null;

    /**
     * @var boolean $X509Token
     */
    protected $X509Token = null;

    /**
     * @var boolean $SAMLToken
     */
    protected $SAMLToken = null;

    /**
     * @var boolean $KerberosToken
     */
    protected $KerberosToken = null;

    /**
     * @var boolean $RELToken
     */
    protected $RELToken = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var SecurityCapabilitiesExtension $Extension
     */
    protected $Extension = null;

    /**
     * @param boolean $TLS11
     * @param boolean $TLS12
     * @param boolean $OnboardKeyGeneration
     * @param boolean $AccessPolicyConfig
     * @param boolean $X509Token
     * @param boolean $SAMLToken
     * @param boolean $KerberosToken
     * @param boolean $RELToken
     * @param string $any
     */
    public function __construct($TLS11, $TLS12, $OnboardKeyGeneration, $AccessPolicyConfig, $X509Token, $SAMLToken, $KerberosToken, $RELToken, $any)
    {
      $this->TLS11 = $TLS11;
      $this->TLS12 = $TLS12;
      $this->OnboardKeyGeneration = $OnboardKeyGeneration;
      $this->AccessPolicyConfig = $AccessPolicyConfig;
      $this->X509Token = $X509Token;
      $this->SAMLToken = $SAMLToken;
      $this->KerberosToken = $KerberosToken;
      $this->RELToken = $RELToken;
      $this->any = $any;
    }

    /**
     * @return boolean
     */
    public function getTLS11()
    {
      return $this->TLS11;
    }

    /**
     * @param boolean $TLS11
     * @return SecurityCapabilities
     */
    public function setTLS11($TLS11)
    {
      $this->TLS11 = $TLS11;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTLS12()
    {
      return $this->TLS12;
    }

    /**
     * @param boolean $TLS12
     * @return SecurityCapabilities
     */
    public function setTLS12($TLS12)
    {
      $this->TLS12 = $TLS12;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnboardKeyGeneration()
    {
      return $this->OnboardKeyGeneration;
    }

    /**
     * @param boolean $OnboardKeyGeneration
     * @return SecurityCapabilities
     */
    public function setOnboardKeyGeneration($OnboardKeyGeneration)
    {
      $this->OnboardKeyGeneration = $OnboardKeyGeneration;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAccessPolicyConfig()
    {
      return $this->AccessPolicyConfig;
    }

    /**
     * @param boolean $AccessPolicyConfig
     * @return SecurityCapabilities
     */
    public function setAccessPolicyConfig($AccessPolicyConfig)
    {
      $this->AccessPolicyConfig = $AccessPolicyConfig;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getX509Token()
    {
      return $this->X509Token;
    }

    /**
     * @param boolean $X509Token
     * @return SecurityCapabilities
     */
    public function setX509Token($X509Token)
    {
      $this->X509Token = $X509Token;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSAMLToken()
    {
      return $this->SAMLToken;
    }

    /**
     * @param boolean $SAMLToken
     * @return SecurityCapabilities
     */
    public function setSAMLToken($SAMLToken)
    {
      $this->SAMLToken = $SAMLToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKerberosToken()
    {
      return $this->KerberosToken;
    }

    /**
     * @param boolean $KerberosToken
     * @return SecurityCapabilities
     */
    public function setKerberosToken($KerberosToken)
    {
      $this->KerberosToken = $KerberosToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRELToken()
    {
      return $this->RELToken;
    }

    /**
     * @param boolean $RELToken
     * @return SecurityCapabilities
     */
    public function setRELToken($RELToken)
    {
      $this->RELToken = $RELToken;
      return $this;
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
     * @return SecurityCapabilities
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return SecurityCapabilitiesExtension
     */
    public function getExtension()
    {
      return $this->Extension;
    }

    /**
     * @param SecurityCapabilitiesExtension $Extension
     * @return SecurityCapabilities
     */
    public function setExtension($Extension)
    {
      $this->Extension = $Extension;
      return $this;
    }

}
