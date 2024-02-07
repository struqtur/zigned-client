<?php

namespace Struqtur\Zigned\Api\Endpoint;

class PutAgreementsAgreementIdSigningGroupsSigningGroupId extends \Struqtur\Zigned\Api\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Api\Runtime\Client\Endpoint
{
    protected $agreement_id;
    protected $signing_group_id;
    /**
     * Update an existin signing group. The agreement must be in draft or open state.
     *
     * @param string $agreementId PUT /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param string $signingGroupId PUT /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param null|\Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutBody $requestBody 
     */
    public function __construct(string $agreementId, string $signingGroupId, ?\Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutBody $requestBody = null)
    {
        $this->agreement_id = $agreementId;
        $this->signing_group_id = $signingGroupId;
        $this->body = $requestBody;
    }
    use \Struqtur\Zigned\Api\Runtime\Client\EndpointTrait;
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
        if ($this->body instanceof \Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutBody) {
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
     * @throws \Struqtur\Zigned\Api\Exception\PutAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Api\Exception\PutAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}