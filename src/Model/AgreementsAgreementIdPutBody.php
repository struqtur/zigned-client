<?php

namespace Struqtur\Zigned\Model;

class AgreementsAgreementIdPutBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The issuer of the agreement. If not provided, the authenticated client will be used.
     *
     * @var AgreementsAgreementIdPutBodyissuer
     */
    protected $issuer;
    /**
     * Enables email communication in the agreement process. If not provided, the default value is true. If disabled, you will be responsible for handling all communication.
     *
     * @var bool
     */
    protected $sendEmails;
    /**
     * The minimum trust level used for all signatures in accordance with the eIDAS regulation. If not provided, the default value is SES.
     *
     * @var string
     */
    protected $trustLevel;
    /**
     * Enables signing order for the agreement process. If not provided, the default value is false. If enabled, the signers will be required to sign in the order in which they are defined.
     *
     * @var bool
     */
    protected $signingOrder;
    /**
     * 
     *
     * @var mixed
     */
    protected $theme;
    /**
     * 
     *
     * @var mixed
     */
    protected $successCallbackUrl;
    /**
     * 
     *
     * @var mixed
     */
    protected $lookupKey;
    /**
     * The issuer of the agreement. If not provided, the authenticated client will be used.
     *
     * @return AgreementsAgreementIdPutBodyissuer
     */
    public function getIssuer() : AgreementsAgreementIdPutBodyissuer
    {
        return $this->issuer;
    }
    /**
     * The issuer of the agreement. If not provided, the authenticated client will be used.
     *
     * @param AgreementsAgreementIdPutBodyissuer $issuer
     *
     * @return self
     */
    public function setIssuer(AgreementsAgreementIdPutBodyissuer $issuer) : self
    {
        $this->initialized['issuer'] = true;
        $this->issuer = $issuer;
        return $this;
    }
    /**
     * Enables email communication in the agreement process. If not provided, the default value is true. If disabled, you will be responsible for handling all communication.
     *
     * @return bool
     */
    public function getSendEmails() : bool
    {
        return $this->sendEmails;
    }
    /**
     * Enables email communication in the agreement process. If not provided, the default value is true. If disabled, you will be responsible for handling all communication.
     *
     * @param bool $sendEmails
     *
     * @return self
     */
    public function setSendEmails(bool $sendEmails) : self
    {
        $this->initialized['sendEmails'] = true;
        $this->sendEmails = $sendEmails;
        return $this;
    }
    /**
     * The minimum trust level used for all signatures in accordance with the eIDAS regulation. If not provided, the default value is SES.
     *
     * @return string
     */
    public function getTrustLevel() : string
    {
        return $this->trustLevel;
    }
    /**
     * The minimum trust level used for all signatures in accordance with the eIDAS regulation. If not provided, the default value is SES.
     *
     * @param string $trustLevel
     *
     * @return self
     */
    public function setTrustLevel(string $trustLevel) : self
    {
        $this->initialized['trustLevel'] = true;
        $this->trustLevel = $trustLevel;
        return $this;
    }
    /**
     * Enables signing order for the agreement process. If not provided, the default value is false. If enabled, the signers will be required to sign in the order in which they are defined.
     *
     * @return bool
     */
    public function getSigningOrder() : bool
    {
        return $this->signingOrder;
    }
    /**
     * Enables signing order for the agreement process. If not provided, the default value is false. If enabled, the signers will be required to sign in the order in which they are defined.
     *
     * @param bool $signingOrder
     *
     * @return self
     */
    public function setSigningOrder(bool $signingOrder) : self
    {
        $this->initialized['signingOrder'] = true;
        $this->signingOrder = $signingOrder;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }
    /**
     * 
     *
     * @param mixed $theme
     *
     * @return self
     */
    public function setTheme($theme) : self
    {
        $this->initialized['theme'] = true;
        $this->theme = $theme;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSuccessCallbackUrl()
    {
        return $this->successCallbackUrl;
    }
    /**
     * 
     *
     * @param mixed $successCallbackUrl
     *
     * @return self
     */
    public function setSuccessCallbackUrl($successCallbackUrl) : self
    {
        $this->initialized['successCallbackUrl'] = true;
        $this->successCallbackUrl = $successCallbackUrl;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getLookupKey()
    {
        return $this->lookupKey;
    }
    /**
     * 
     *
     * @param mixed $lookupKey
     *
     * @return self
     */
    public function setLookupKey($lookupKey) : self
    {
        $this->initialized['lookupKey'] = true;
        $this->lookupKey = $lookupKey;
        return $this;
    }
}