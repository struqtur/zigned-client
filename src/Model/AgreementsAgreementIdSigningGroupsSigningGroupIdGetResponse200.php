<?php

namespace Struqtur\Zigned\Model;

class AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse200 extends \ArrayObject
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
     * A single object of the signing_group resource.
     *
     * @var string
     */
    protected $resultType;
    /**
     * Data contains the signing_group resource.
     *
     * @var string
     */
    protected $resourceType;
    /**
     * The resource data.
     *
     * @var AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse200Data
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
     * A single object of the signing_group resource.
     *
     * @return string
     */
    public function getResultType() : string
    {
        return $this->resultType;
    }
    /**
     * A single object of the signing_group resource.
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
     * Data contains the signing_group resource.
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * Data contains the signing_group resource.
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
     * @return AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse200Data
     */
    public function getData() : AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse200Data
    {
        return $this->data;
    }
    /**
     * The resource data.
     *
     * @param AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse200Data $data
     *
     * @return self
     */
    public function setData(AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}