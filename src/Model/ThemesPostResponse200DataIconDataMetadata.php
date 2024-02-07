<?php

namespace Struqtur\Zigned\Api\Model;

class ThemesPostResponse200DataIconDataMetadata extends \ArrayObject
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
     * A provided lookup key provided by you to help you identify the file.
     *
     * @var string
     */
    protected $lookupKey;
    /**
     * A provided lookup key provided by you to help you identify the file.
     *
     * @return string
     */
    public function getLookupKey() : string
    {
        return $this->lookupKey;
    }
    /**
     * A provided lookup key provided by you to help you identify the file.
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
}