<?php

namespace Struqtur\Zigned\Endpoint;

class DeleteAgreementsAgreementIdDocumentsAttachmentsAttachmentId extends \Struqtur\Zigned\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Runtime\Client\Endpoint
{
    protected $agreement_id;
    protected $attachment_id;
    /**
     * Detaches and deletes an attachment from the agreement. The attachment order will be updated accordingly.
     *
     * @param string $agreementId DELETE /agreements/:agreement_id/documents/attachments/:attachment_id parameter
     * @param string $attachmentId DELETE /agreements/:agreement_id/documents/attachments/:attachment_id parameter
     */
    public function __construct(string $agreementId, string $attachmentId)
    {
        $this->agreement_id = $agreementId;
        $this->attachment_id = $attachmentId;
    }
    use \Struqtur\Zigned\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{agreement_id}', '{attachment_id}'], [$this->agreement_id, $this->attachment_id], '/agreements/{agreement_id}/documents/attachments/{attachment_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Struqtur\Zigned\Exception\DeleteAgreementsAgreementIdDocumentsAttachmentsAttachmentIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Exception\DeleteAgreementsAgreementIdDocumentsAttachmentsAttachmentIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdDeleteResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}