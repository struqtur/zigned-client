<?php

namespace Struqtur\Zigned\Model;

class ThemesPostBody extends \ArrayObject
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
     * The primary color used to generate the color palette
     *
     * @var string
     */
    protected $primaryColor = '#000000';
    /**
     * 
     *
     * @var string
     */
    protected $logoFileId;
    /**
     * 
     *
     * @var string
     */
    protected $iconFileId;
    /**
     * Arbitrary string which can be used to identify the theme in future requests.
     *
     * @var string
     */
    protected $lookupKey;
    /**
     * The primary color used to generate the color palette
     *
     * @return string
     */
    public function getPrimaryColor() : string
    {
        return $this->primaryColor;
    }
    /**
     * The primary color used to generate the color palette
     *
     * @param string $primaryColor
     *
     * @return self
     */
    public function setPrimaryColor(string $primaryColor) : self
    {
        $this->initialized['primaryColor'] = true;
        $this->primaryColor = $primaryColor;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLogoFileId() : string
    {
        return $this->logoFileId;
    }
    /**
     * 
     *
     * @param string $logoFileId
     *
     * @return self
     */
    public function setLogoFileId(string $logoFileId) : self
    {
        $this->initialized['logoFileId'] = true;
        $this->logoFileId = $logoFileId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getIconFileId() : string
    {
        return $this->iconFileId;
    }
    /**
     * 
     *
     * @param string $iconFileId
     *
     * @return self
     */
    public function setIconFileId(string $iconFileId) : self
    {
        $this->initialized['iconFileId'] = true;
        $this->iconFileId = $iconFileId;
        return $this;
    }
    /**
     * Arbitrary string which can be used to identify the theme in future requests.
     *
     * @return string
     */
    public function getLookupKey() : string
    {
        return $this->lookupKey;
    }
    /**
     * Arbitrary string which can be used to identify the theme in future requests.
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