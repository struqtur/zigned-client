<?php

namespace Vendor\Library\Generated\Endpoint;

class PostAgreementsAgreementIdSigningGroups extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $agreement_id;
    /**
     * Signing groups are used to group participants when signing order is enabled. Signing order will be enabled automatically when you create your first signing group. All existing participants will be placed in the first group when the first signing group is created.
     *
     * @param string $agreementId POST /agreements/:agreement_id/signing_groups parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsPostBody $requestBody 
     */
    public function __construct(string $agreementId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsPostBody $requestBody = null)
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
        return str_replace(['{agreement_id}'], [$this->agreement_id], '/agreements/{agreement_id}/signing_groups');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsPostBody) {
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
     * @throws \Vendor\Library\Generated\Exception\PostAgreementsAgreementIdSigningGroupsBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsPostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdSigningGroupsPostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\PostAgreementsAgreementIdSigningGroupsBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdSigningGroupsPostResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}