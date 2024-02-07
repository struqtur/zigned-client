<?php

namespace Vendor\Library\Generated\Endpoint;

class DeleteAgreementsAgreementIdDocumentsMain extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $agreement_id;
    /**
     * Deletes and detaches the main document from the agreement. The document will not be deleted from your files archive.
     *
     * @param string $agreementId DELETE /agreements/:agreement_id/documents/main parameter
     */
    public function __construct(string $agreementId)
    {
        $this->agreement_id = $agreementId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{agreement_id}'], [$this->agreement_id], '/agreements/{agreement_id}/documents/main');
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
     * @throws \Vendor\Library\Generated\Exception\DeleteAgreementsAgreementIdDocumentsMainBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdDocumentsMainDeleteResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdDocumentsMainDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\DeleteAgreementsAgreementIdDocumentsMainBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdDocumentsMainDeleteResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}