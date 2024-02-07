<?php

namespace Struqtur\Zigned\Model;

class ThemesGetResponse200DataItemMetadata extends \ArrayObject
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
     * A provided lookup key provided by you to help you identify the theme.
     *
     * @var string
     */
    protected $lookupKey;
    /**
     * A provided lookup key provided by you to help you identify the theme.
     *
     * @return string
     */
    public function getLookupKey() : string
    {
        return $this->lookupKey;
    }
    /**
     * A provided lookup key provided by you to help you identify the theme.
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