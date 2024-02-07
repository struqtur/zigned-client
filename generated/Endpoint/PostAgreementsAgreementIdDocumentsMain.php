<?php

namespace Vendor\Library\Generated\Endpoint;

class PostAgreementsAgreementIdDocumentsMain extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $agreement_id;
    /**
     * Attaches the main document to be signed. The document must be uploaded first to your files archive. When attaching a document to be signed, it will be cloned and become immutable.
     *
     * @param string $agreementId POST /agreements/:agreement_id/documents/main parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsMainPostBody $requestBody 
     */
    public function __construct(string $agreementId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsMainPostBody $requestBody = null)
    {
        $this->agreement_id = $agreementId;
        $this->body = $requestBody;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
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
        if ($this->body instanceof \Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsMainPostBody) {
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
     * @throws \Vendor\Library\Generated\Exception\PostAgreementsAgreementIdDocumentsMainBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsMainPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdDocumentsMainPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\PostAgreementsAgreementIdDocumentsMainBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdDocumentsMainPostResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}