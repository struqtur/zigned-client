<?php

namespace Vendor\Library\Generated\Model;

class FilesPostBody extends \ArrayObject
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
     * The binary representation of the file to upload.
     *
     * @var string
     */
    protected $file;
    /**
     * Arbitrary string which can be used to identify the file in future requests.
     *
     * @var string
     */
    protected $lookupKey;
    /**
     * The binary representation of the file to upload.
     *
     * @return string
     */
    public function getFile() : string
    {
        return $this->file;
    }
    /**
     * The binary representation of the file to upload.
     *
     * @param string $file
     *
     * @return self
     */
    public function setFile(string $file) : self
    {
        $this->initialized['file'] = true;
        $this->file = $file;
        return $this;
    }
    /**
     * Arbitrary string which can be used to identify the file in future requests.
     *
     * @return string
     */
    public function getLookupKey() : string
    {
        return $this->lookupKey;
    }
    /**
     * Arbitrary string which can be used to identify the file in future requests.
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