<?php

namespace Struqtur\Zigned\Api\Model;

class AgreementsGetResponse200DataItemMetadata extends \ArrayObject
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
     * A provided lookup key provided by you to help you identify the agreement.
     *
     * @var string
     */
    protected $lookupKey;
    /**
     * A provided callback url to refer the participants back to post successful action.
     *
     * @var string
     */
    protected $successCallbackUrl;
    /**
     * A provided lookup key provided by you to help you identify the agreement.
     *
     * @return string
     */
    public function getLookupKey() : string
    {
        return $this->lookupKey;
    }
    /**
     * A provided lookup key provided by you to help you identify the agreement.
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
     * A provided callback url to refer the participants back to post successful action.
     *
     * @return string
     */
    public function getSuccessCallbackUrl() : string
    {
        return $this->successCallbackUrl;
    }
    /**
     * A provided callback url to refer the participants back to post successful action.
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