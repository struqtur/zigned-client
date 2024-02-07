<?php

namespace Struqtur\Zigned\Api\Exception;

class GetAgreementsAgreementIdDocumentsAttachmentsAttachmentIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse400
     */
    private $agreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse400 $agreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements/:agreement_id/documents/attachments/:attachment_id Error response');
        $this->agreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse400 = $agreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse400() : \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse400
    {
        return $this->agreementsAgreementIdDocumentsAttachmentsAttachmentIdGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}