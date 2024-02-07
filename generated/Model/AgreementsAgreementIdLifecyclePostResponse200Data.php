<?php

namespace Vendor\Library\Generated\Model;

class AgreementsAgreementIdLifecyclePostResponse200Data extends \ArrayObject
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
     * The unique identifier of the agreement
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $resourceType;
    /**
     * Indicates if the agreement is created using a development client
     *
     * @var bool
     */
    protected $testMode;
    /**
     * The status of the agreement
     *
     * @var string
     */
    protected $status;
    /**
     * If the agreement is in a cancelled state, this will be a short description on the reason why, otherwise it will be null.
     *
     * @var string|null
     */
    protected $cancellationReason;
    /**
     * 
     *
     * @var mixed
     */
    protected $theme;
    /**
     * The issuer of the agreement
     *
     * @var AgreementsAgreementIdLifecyclePostResponse200DataIssuer
     */
    protected $issuer;
    /**
     * 
     *
     * @var mixed
     */
    protected $participants;
    /**
     * 
     *
     * @var mixed
     */
    protected $signingGroups;
    /**
     * 
     *
     * @var AgreementsAgreementIdLifecyclePostResponse200DataDocuments
     */
    protected $documents;
    /**
     * 
     *
     * @var AgreementsAgreementIdLifecyclePostResponse200DataSigningOrder
     */
    protected $signingOrder;
    /**
     * 
     *
     * @var AgreementsAgreementIdLifecyclePostResponse200DataCommunication
     */
    protected $communication;
    /**
     * 
     *
     * @var AgreementsAgreementIdLifecyclePostResponse200DataMetadata
     */
    protected $metadata;
    /**
     * UTC datetime ISO string
     *
     * @var string
     */
    protected $updatedAt;
    /**
     * UTC datetime ISO string
     *
     * @var string
     */
    protected $createdAt;
    /**
     * The unique identifier of the agreement
     *
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }
    /**
     * The unique identifier of the agreement
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id) : self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getResourceType() : string
    {
        return $this->resourceType;
    }
    /**
     * 
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
     * Indicates if the agreement is created using a development client
     *
     * @return bool
     */
    public function getTestMode() : bool
    {
        return $this->testMode;
    }
    /**
     * Indicates if the agreement is created using a development client
     *
     * @param bool $testMode
     *
     * @return self
     */
    public function setTestMode(bool $testMode) : self
    {
        $this->initialized['testMode'] = true;
        $this->testMode = $testMode;
        return $this;
    }
    /**
     * The status of the agreement
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * The status of the agreement
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * If the agreement is in a cancelled state, this will be a short description on the reason why, otherwise it will be null.
     *
     * @return string|null
     */
    public function getCancellationReason() : ?string
    {
        return $this->cancellationReason;
    }
    /**
     * If the agreement is in a cancelled state, this will be a short description on the reason why, otherwise it will be null.
     *
     * @param string|null $cancellationReason
     *
     * @return self
     */
    public function setCancellationReason(?string $cancellationReason) : self
    {
        $this->initialized['cancellationReason'] = true;
        $this->cancellationReason = $cancellationReason;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }
    /**
     * 
     *
     * @param mixed $theme
     *
     * @return self
     */
    public function setTheme($theme) : self
    {
        $this->initialized['theme'] = true;
        $this->theme = $theme;
        return $this;
    }
    /**
     * The issuer of the agreement
     *
     * @return AgreementsAgreementIdLifecyclePostResponse200DataIssuer
     */
    public function getIssuer() : AgreementsAgreementIdLifecyclePostResponse200DataIssuer
    {
        return $this->issuer;
    }
    /**
     * The issuer of the agreement
     *
     * @param AgreementsAgreementIdLifecyclePostResponse200DataIssuer $issuer
     *
     * @return self
     */
    public function setIssuer(AgreementsAgreementIdLifecyclePostResponse200DataIssuer $issuer) : self
    {
        $this->initialized['issuer'] = true;
        $this->issuer = $issuer;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getParticipants()
    {
        return $this->participants;
    }
    /**
     * 
     *
     * @param mixed $participants
     *
     * @return self
     */
    public function setParticipants($participants) : self
    {
        $this->initialized['participants'] = true;
        $this->participants = $participants;
        return $this;
    }
    /**
     * 
     *
     * @return mixed
     */
    public function getSigningGroups()
    {
        return $this->signingGroups;
    }
    /**
     * 
     *
     * @param mixed $signingGroups
     *
     * @return self
     */
    public function setSigningGroups($signingGroups) : self
    {
        $this->initialized['signingGroups'] = true;
        $this->signingGroups = $signingGroups;
        return $this;
    }
    /**
     * 
     *
     * @return AgreementsAgreementIdLifecyclePostResponse200DataDocuments
     */
    public function getDocuments() : AgreementsAgreementIdLifecyclePostResponse200DataDocuments
    {
        return $this->documents;
    }
    /**
     * 
     *
     * @param AgreementsAgreementIdLifecyclePostResponse200DataDocuments $documents
     *
     * @return self
     */
    public function setDocuments(AgreementsAgreementIdLifecyclePostResponse200DataDocuments $documents) : self
    {
        $this->initialized['documents'] = true;
        $this->documents = $documents;
        return $this;
    }
    /**
     * 
     *
     * @return AgreementsAgreementIdLifecyclePostResponse200DataSigningOrder
     */
    public function getSigningOrder() : AgreementsAgreementIdLifecyclePostResponse200DataSigningOrder
    {
        return $this->signingOrder;
    }
    /**
     * 
     *
     * @param AgreementsAgreementIdLifecyclePostResponse200DataSigningOrder $signingOrder
     *
     * @return self
     */
    public function setSigningOrder(AgreementsAgreementIdLifecyclePostResponse200DataSigningOrder $signingOrder) : self
    {
        $this->initialized['signingOrder'] = true;
        $this->signingOrder = $signingOrder;
        return $this;
    }
    /**
     * 
     *
     * @return AgreementsAgreementIdLifecyclePostResponse200DataCommunication
     */
    public function getCommunication() : AgreementsAgreementIdLifecyclePostResponse200DataCommunication
    {
        return $this->communication;
    }
    /**
     * 
     *
     * @param AgreementsAgreementIdLifecyclePostResponse200DataCommunication $communication
     *
     * @return self
     */
    public function setCommunication(AgreementsAgreementIdLifecyclePostResponse200DataCommunication $communication) : self
    {
        $this->initialized['communication'] = true;
        $this->communication = $communication;
        return $this;
    }
    /**
     * 
     *
     * @return AgreementsAgreementIdLifecyclePostResponse200DataMetadata
     */
    public function getMetadata() : AgreementsAgreementIdLifecyclePostResponse200DataMetadata
    {
        return $this->metadata;
    }
    /**
     * 
     *
     * @param AgreementsAgreementIdLifecyclePostResponse200DataMetadata $metadata
     *
     * @return self
     */
    public function setMetadata(AgreementsAgreementIdLifecyclePostResponse200DataMetadata $metadata) : self
    {
        $this->initialized['metadata'] = true;
        $this->metadata = $metadata;
        return $this;
    }
    /**
     * UTC datetime ISO string
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * UTC datetime ISO string
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * UTC datetime ISO string
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * UTC datetime ISO string
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
}