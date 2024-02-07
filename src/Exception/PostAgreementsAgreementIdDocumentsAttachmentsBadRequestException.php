<?php

namespace Struqtur\Zigned\Api\Exception;

class PostAgreementsAgreementIdDocumentsAttachmentsBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsPostResponse400
     */
    private $agreementsAgreementIdDocumentsAttachmentsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsPostResponse400 $agreementsAgreementIdDocumentsAttachmentsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('POST /agreements/:agreement_id/documents/attachments Error response');
        $this->agreementsAgreementIdDocumentsAttachmentsPostResponse400 = $agreementsAgreementIdDocumentsAttachmentsPostResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdDocumentsAttachmentsPostResponse400() : \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsPostResponse400
    {
        return $this->agreementsAgreementIdDocumentsAttachmentsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}