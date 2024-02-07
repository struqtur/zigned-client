<?php

namespace Struqtur\Zigned\Model;

class AgreementsPostBody extends \ArrayObject
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
     * @var AgreementsPostBodyissuer
     */
    protected $issuer;
    /**
     * Enables email communication in the agreement process. If not provided, the default value is true. If disabled, you will be responsible for handling all communication.
     *
     * @var bool
     */
    protected $sendEmails = true;
    /**
     * The minimum trust level used for all signatures in accordance with the eIDAS regulation. If not provided, the default value is SES.
     *
     * @var string
     */
    protected $trustLevel = 'SES';
    /**
     * Enables signing order for the agreement process. If not provided, the default value is false. If enabled, the signers will be required to sign in the order in which they are defined.
     *
     * @var bool
     */
    protected $signingOrder = false;
    /**
     * The ID of the theme to use for the agreement.
     *
     * @var string
     */
    protected $themeId;
    /**
     * Arbitrary string used to identify the agreement. This ID will be returned in the metadata field of the agreement resource.
     *
     * @var string
     */
    protected $lookupKey;
    /**
     * An optional callback url to refer the participants back to post taking action.
     *
     * @var string
     */
    protected $successCallbackUrl;
    /**
     * The issuer of the agreement. If not provided, the authenticated client will be used.
     *
     * @return AgreementsPostBodyissuer
     */
    public function getIssuer() : AgreementsPostBodyissuer
    {
        return $this->issuer;
    }
    /**
     * The issuer of the agreement. If not provided, the authenticated client will be used.
     *
     * @param AgreementsPostBodyissuer $issuer
     *
     * @return self
     */
    public function setIssuer(AgreementsPostBodyissuer $issuer) : self
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
     * The ID of the theme to use for the agreement.
     *
     * @return string
     */
    public function getThemeId() : string
    {
        return $this->themeId;
    }
    /**
     * The ID of the theme to use for the agreement.
     *
     * @param string $themeId
     *
     * @return self
     */
    public function setThemeId(string $themeId) : self
    {
        $this->initialized['themeId'] = true;
        $this->themeId = $themeId;
        return $this;
    }
    /**
     * Arbitrary string used to identify the agreement. This ID will be returned in the metadata field of the agreement resource.
     *
     * @return string
     */
    public function getLookupKey() : string
    {
        return $this->lookupKey;
    }
    /**
     * Arbitrary string used to identify the agreement. This ID will be returned in the metadata field of the agreement resource.
     *
     * @param string $lookupKey
     *
     * @return self
     */
    public function setLookupKey(string $lookupKey) : self
    {
        $this->initialized['lookupKey'] = true;
        $this->lookupKey = $lookupKey;
        return $this;
    }
    /**
     * An optional callback url to refer the participants back to post taking action.
     *
     * @return string
     */
    public function getSuccessCallbackUrl() : string
    {
        return $this->successCallbackUrl;
    }
    /**
     * An optional callback url to refer the participants back to post taking action.
     *
     * @param string $successCallbackUrl
     *
     * @return self
     */
    public function setSuccessCallbackUrl(string $successCallbackUrl) : self
    {
        $this->initialized['successCallbackUrl'] = true;
        $this->successCallbackUrl = $successCallbackUrl;
        return $this;
    }
}