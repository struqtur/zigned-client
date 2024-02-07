<?php

namespace Struqtur\Zigned\Api\Model;

class AgreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse200 extends \ArrayObject
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
     * A non-paginated list of the sign event resource.
     *
     * @var string
     */
    protected $resultType;
    /**
     * Data contains the sign event resource.
     *
     * @var string
     */
    protected $resourceType;
    /**
     * 
     *
     * @var _86d5051e0c6984da525697fc9654ac089e947844Item[]
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
     * A non-paginated list of the sign event resource.
     *
     * @return string
     */
    public function getResultType() : string
    {
        return $this->resultType;
    }
    /**
     * A non-paginated list of the sign event resource.
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
     * Data contains the sign event resource.
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * Data contains the sign event resource.
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
     * @return _86d5051e0c6984da525697fc9654ac089e947844Item[]
     */
    public function getData() : array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param _86d5051e0c6984da525697fc9654ac089e947844Item[] $data
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