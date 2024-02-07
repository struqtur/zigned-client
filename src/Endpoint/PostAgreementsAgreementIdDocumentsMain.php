<?php

namespace Struqtur\Zigned\Api\Endpoint;

class PostAgreementsAgreementIdDocumentsMain extends \Struqtur\Zigned\Api\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Api\Runtime\Client\Endpoint
{
    protected $agreement_id;
    /**
     * Attaches the main document to be signed. The document must be uploaded first to your files archive. When attaching a document to be signed, it will be cloned and become immutable.
     *
     * @param string $agreementId POST /agreements/:agreement_id/documents/main parameter
     * @param null|\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsMainPostBody $requestBody 
     */
    public function __construct(string $agreementId, ?\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsMainPostBody $requestBody = null)
    {
        $this->agreement_id = $agreementId;
        $this->body = $requestBody;
    }
    use \Struqtur\Zigned\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return str_replace(['{agreement_id}'], [$this->agreement_id], '/agreements/{agreement_id}/documents/main');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsMainPostBody) {
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
     * @throws \Struqtur\Zigned\Api\Exception\PostAgreementsAgreementIdDocumentsMainBadRequestException
     *
     * @return null|\Struqtur\Zigned\Api\Model\AgreementsAgreementIdDocumentsMainPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsMainPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Api\Exception\PostAgreementsAgreementIdDocumentsMainBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdDocumentsMainPostResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}