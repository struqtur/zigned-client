<?php

namespace Struqtur\Zigned\Api\Model;

class FilesGetResponse200 extends \ArrayObject
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
     * A paginated list of the file resource.
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
     * The resource data
     *
     * @var FilesGetResponse200DataItem[]
     */
    protected $data;
    /**
     * Contains the pagination meta data
     *
     * @var FilesGetResponse200Pagination
     */
    protected $pagination;
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
     * A paginated list of the file resource.
     *
     * @return string
     */
    public function getResultType() : string
    {
        return $this->resultType;
    }
    /**
     * A paginated list of the file resource.
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
     * The resource data
     *
     * @return FilesGetResponse200DataItem[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * The resource data
     *
     * @param FilesGetResponse200DataItem[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * Contains the pagination meta data
     *
     * @return FilesGetResponse200Pagination
     */
    public function getPagination() : FilesGetResponse200Pagination
    {
        return $this->pagination;
    }
    /**
     * Contains the pagination meta data
     *
     * @param FilesGetResponse200Pagination $pagination
     *
     * @return self
     */
    public function setPagination(FilesGetResponse200Pagination $pagination) : self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
}