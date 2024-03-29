<?php

namespace Struqtur\Zigned\Endpoint;

class GetAgreementsAgreementIdDocumentsAttachments extends \Struqtur\Zigned\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Runtime\Client\Endpoint
{
    protected $agreement_id;
    /**
     * List all attachments for the agreement
     *
     * @param string $agreementId GET /agreements/:agreement_id/documents/attachments parameter
     */
    public function __construct(string $agreementId)
    {
        $this->agreement_id = $agreementId;
    }
    use \Struqtur\Zigned\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{agreement_id}'], [$this->agreement_id], '/agreements/{agreement_id}/documents/attachments');
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
     * @throws \Struqtur\Zigned\Exception\GetAgreementsAgreementIdDocumentsAttachmentsBadRequestException
     *
     * @return null|\Struqtur\Zigned\Model\AgreementsAgreementIdDocumentsAttachmentsGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdDocumentsAttachmentsGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Exception\GetAgreementsAgreementIdDocumentsAttachmentsBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdDocumentsAttachmentsGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}