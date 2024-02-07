<?php

namespace Vendor\Library\Generated\Endpoint;

class GetAgreementsAgreementIdSigningGroups extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $agreement_id;
    /**
     * List all Signing Groups of the agreement
     *
     * @param string $agreementId GET /agreements/:agreement_id/signing_groups parameter
     */
    public function __construct(string $agreementId)
    {
        $this->agreement_id = $agreementId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{agreement_id}'], [$this->agreement_id], '/agreements/{agreement_id}/signing_groups');
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
     * @throws \Vendor\Library\Generated\Exception\GetAgreementsAgreementIdSigningGroupsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdSigningGroupsGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\GetAgreementsAgreementIdSigningGroupsBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdSigningGroupsGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}