<?php

namespace Struqtur\Zigned\Model;

class AgreementsAgreementIdSigningGroupsGetResponse200 extends \ArrayObject
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
     * A non-paginated list of the signing group resource.
     *
     * @var string
     */
    protected $resultType;
    /**
     * Data contains the signing group resource.
     *
     * @var string
     */
    protected $resourceType;
    /**
     * 
     *
     * @var D69cfbd1e408327b80080ee78c087563df3370f4Item[]
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
     * A non-paginated list of the signing group resource.
     *
     * @return string
     */
    public function getResultType() : string
    {
        return $this->resultType;
    }
    /**
     * A non-paginated list of the signing group resource.
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
     * Data contains the signing group resource.
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * Data contains the signing group resource.
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
     * 
     *
     * @return D69cfbd1e408327b80080ee78c087563df3370f4Item[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param D69cfbd1e408327b80080ee78c087563df3370f4Item[] $data
     *
     * @return self
     */
    public function setData(array $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}