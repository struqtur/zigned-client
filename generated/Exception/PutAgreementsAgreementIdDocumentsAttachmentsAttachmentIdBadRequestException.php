<?php

namespace Vendor\Library\Generated\Exception;

class PutAgreementsAgreementIdDocumentsAttachmentsAttachmentIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse400
     */
    private $agreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse400 $agreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('PUT /agreements/:agreement_id/documents/attachments/:attachment_id Error response');
        $this->agreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse400 = $agreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse400
    {
        return $this->agreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}