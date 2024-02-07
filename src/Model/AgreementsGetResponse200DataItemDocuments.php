<?php

namespace Struqtur\Zigned\Api\Model;

class AgreementsGetResponse200DataItemDocuments extends \ArrayObject
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
     * 
     *
     * @var AgreementsGetResponse200DataItemDocumentsOriginalDocuments
     */
    protected $originalDocuments;
    /**
     * The finalized and signed document.
     *
     * @var mixed
     */
    protected $signedDocument;
    /**
     * 
     *
     * @return AgreementsGetResponse200DataItemDocumentsOriginalDocuments
     */
    public function getOriginalDocuments() : AgreementsGetResponse200DataItemDocumentsOriginalDocuments
    {
        return $this->originalDocuments;
    }
    /**
     * 
     *
     * @param AgreementsGetResponse200DataItemDocumentsOriginalDocuments $originalDocuments
     *
     * @return self
     */
    public function setOriginalDocuments(AgreementsGetResponse200DataItemDocumentsOriginalDocuments $originalDocuments) : self
    {
        $this->initialized['originalDocuments'] = true;
        $this->originalDocuments = $originalDocuments;
        return $this;
    }
    /**
     * The finalized and signed document.
     *
     * @return mixed
     */
    public function getSignedDocument()
    {
        return $this->signedDocument;
    }
    /**
     * The finalized and signed document.
     *
     * @param mixed $signedDocument
     *
     * @return self
     */
    public function setSignedDocument($signedDocument) : self
    {
        $this->initialized['signedDocument'] = true;
        $this->signedDocument = $signedDocument;
        return $this;
    }
}