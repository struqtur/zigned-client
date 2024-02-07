<?php

namespace Struqtur\Zigned\Endpoint;

class DeleteAgreementsAgreementIdSigningGroupsSigningGroupId extends \Struqtur\Zigned\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Runtime\Client\Endpoint
{
    protected $agreement_id;
    protected $signing_group_id;
    /**
     * Deletes a signing group from the agreement. The agreement must be in draft or open state.
     *
     * @param string $agreementId DELETE /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     * @param string $signingGroupId DELETE /agreements/:agreement_id/signing_groups/:signing_group_id parameter
     */
    public function __construct(string $agreementId, string $signingGroupId)
    {
        $this->agreement_id = $agreementId;
        $this->signing_group_id = $signingGroupId;
    }
    use \Struqtur\Zigned\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'DELETE';
    }
    public function getUri() : string
    {
        return str_replace(['{agreement_id}', '{signing_group_id}'], [$this->agreement_id, $this->signing_group_id], '/agreements/{agreement_id}/signing_groups/{signing_group_id}');
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
     * @throws \Struqtur\Zigned\Exception\DeleteAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Exception\DeleteAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Model\\AgreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}