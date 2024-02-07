<?php

namespace Vendor\Library\Generated\Model;

class ThemesPostResponse200DataLogo extends \ArrayObject
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
     * The version of the response schema
     *
     * @var string
     */
    protected $version;
    /**
     * A single object of the file resource.
     *
     * @var string
     */
    protected $resultType;
    /**
     * Data contains the file resource.
     *
     * @var string
     */
    protected $resourceType;
    /**
     * The resource data.
     *
     * @var ThemesPostResponse200DataLogoData
     */
    protected $data;
    /**
     * The version of the response schema
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }
    /**
     * The version of the response schema
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version) : self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
    /**
     * A single object of the file resource.
     *
     * @return string
     */
    public function getResultType() : string
    {
        return $this->resultType;
    }
    /**
     * A single object of the file resource.
     *
     * @param string $resultType
     *
     * @return self
     */
    public function setResultType(string $resultType) : self
    {
        $this->initialized['resultType'] = true;
        $this->resultType = $resultType;
        return $this;
    }
    /**
     * Data contains the file resource.
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * Data contains the file resource.
     *
     * @param string $resourceType
     *
     * @return self
     */
    public function setResourceType(string $resourceType) : self
    {
        $this->initialized['resourceType'] = true;
        $this->resourceType = $resourceType;
        return $this;
    }
    /**
     * The resource data.
     *
     * @return ThemesPostResponse200DataLogoData
     */
    public function getData() : ThemesPostResponse200DataLogoData
    {
        return $this->data;
    }
    /**
     * The resource data.
     *
     * @param ThemesPostResponse200DataLogoData $data
     *
     * @return self
     */
    public function setData(ThemesPostResponse200DataLogoData $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}