<?php

namespace Struqtur\Zigned\Model;

class AgreementsAgreementIdDocumentsMainPostResponse200DataDocuments extends \ArrayObject
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
     * @var AgreementsAgreementIdDocumentsMainPostResponse200DataDocumentsOriginalDocuments
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
     * @return AgreementsAgreementIdDocumentsMainPostResponse200DataDocumentsOriginalDocuments
     */
    public function getOriginalDocuments() : AgreementsAgreementIdDocumentsMainPostResponse200DataDocumentsOriginalDocuments
    {
        return $this->originalDocuments;
    }
    /**
     * 
     *
     * @param AgreementsAgreementIdDocumentsMainPostResponse200DataDocumentsOriginalDocuments $originalDocuments
     *
     * @return self
     */
    public function setOriginalDocuments(AgreementsAgreementIdDocumentsMainPostResponse200DataDocumentsOriginalDocuments $originalDocuments) : self
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