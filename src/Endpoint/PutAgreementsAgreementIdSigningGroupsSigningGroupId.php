<?php

namespace Struqtur\Zigned\Endpoint;

class PutAgreementsAgreementIdSigningGroupsSigningGroupId extends \Struqtur\Zigned\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Runtime\Client\Endpoint
{
    protected $agreement_id;
    protected $signing_group_id;
    /**
     * Update an existin signing group. The agreement must be in draft or open state.
     *
     * @param string $agreementId PUT /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param string $signingGroupId PUT /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param null|\Struqtur\Zigned\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutBody $requestBody 
     */
    public function __construct(string $agreementId, string $signingGroupId, ?\Struqtur\Zigned\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutBody $requestBody = null)
    {
        $this->agreement_id = $agreementId;
        $this->signing_group_id = $signingGroupId;
        $this->body = $requestBody;
    }
    use \Struqtur\Zigned\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{agreement_id}', '{signing_group_id}'], [$this->agreement_id, $this->signing_group_id], '/agreements/{agreement_id}/signing_groups/{signing_group_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Struqtur\Zigned\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutBody) {
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
     * @throws \Struqtur\Zigned\Exception\PutAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Exception\PutAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}