<?php

namespace Struqtur\Zigned\Exception;

class DeleteAgreementsAgreementIdDocumentsAttachmentsAttachmentIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400
     */
    private $agreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400 $agreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /agreements/:agreement_id/documents/attachments/:attachment_id Error response');
        $this->agreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400 = $agreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400() : \Struqtur\Zigned\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400
    {
        return $this->agreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}