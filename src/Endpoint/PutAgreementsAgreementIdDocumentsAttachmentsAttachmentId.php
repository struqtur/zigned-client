<?php

namespace Struqtur\Zigned\Api\Endpoint;

class PutAgreementsAgreementIdDocumentsAttachmentsAttachmentId extends \Struqtur\Zigned\Api\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Api\Runtime\Client\Endpoint
{
    protected $agreement_id;
    protected $attachment_id;
    /**
     * Update an attachment for the agreement
     *
     * @param string $agreementId PUT /agreements/:agreement_id/documents/attachments/:attachment_id parameter
     * @param string $attachmentId PUT /agreements/:agreement_id/documents/attachments/:attachment_id parameter
     * @param null|\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutBody $requestBody 
     */
    public function __construct(string $agreementId, string $attachmentId, ?\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutBody $requestBody = null)
    {
        $this->agreement_id = $agreementId;
        $this->attachment_id = $attachmentId;
        $this->body = $requestBody;
    }
    use \Struqtur\Zigned\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{agreement_id}', '{attachment_id}'], [$this->agreement_id, $this->attachment_id], '/agreements/{agreement_id}/documents/attachments/{attachment_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders() : array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Struqtur\Zigned\Api\Exception\PutAgreementsAgreementIdDocumentsAttachmentsAttachmentIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Api\Exception\PutAgreementsAgreementIdDocumentsAttachmentsAttachmentIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsAttachmentsAttachmentIdPutResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}