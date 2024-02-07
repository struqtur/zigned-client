<?php

namespace Struqtur\Zigned\Api\Exception;

class GetAgreementsAgreementIdDocumentsAttachmentsBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsGetResponse400
     */
    private $agreementsAgreementIdDocumentsAttachmentsGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsGetResponse400 $agreementsAgreementIdDocumentsAttachmentsGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements/:agreement_id/documents/attachments Error response');
        $this->agreementsAgreementIdDocumentsAttachmentsGetResponse400 = $agreementsAgreementIdDocumentsAttachmentsGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdDocumentsAttachmentsGetResponse400() : \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsGetResponse400
    {
        return $this->agreementsAgreementIdDocumentsAttachmentsGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}