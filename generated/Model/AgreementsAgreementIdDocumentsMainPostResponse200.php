<?php

namespace Vendor\Library\Generated\Model;

class AgreementsAgreementIdDocumentsMainPostResponse200 extends \ArrayObject
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
     * A single object of the agreement resource.
     *
     * @var string
     */
    protected $resultType;
    /**
     * Data contains the agreement resource.
     *
     * @var string
     */
    protected $resourceType;
    /**
     * The resource data.
     *
     * @var AgreementsAgreementIdDocumentsMainPostResponse200Data
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
     * A single object of the agreement resource.
     *
     * @return string
     */
    public function getResultType() : string
    {
        return $this->resultType;
    }
    /**
     * A single object of the agreement resource.
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
     * Data contains the agreement resource.
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * Data contains the agreement resource.
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
     * @return AgreementsAgreementIdDocumentsMainPostResponse200Data
     */
    public function getData() : AgreementsAgreementIdDocumentsMainPostResponse200Data
    {
        return $this->data;
    }
    /**
     * The resource data.
     *
     * @param AgreementsAgreementIdDocumentsMainPostResponse200Data $data
     *
     * @return self
     */
    public function setData(AgreementsAgreementIdDocumentsMainPostResponse200Data $data) : self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}