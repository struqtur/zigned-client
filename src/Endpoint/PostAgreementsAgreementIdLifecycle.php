<?php

namespace Struqtur\Zigned\Api\Endpoint;

class PostAgreementsAgreementIdLifecycle extends \Struqtur\Zigned\Api\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Api\Runtime\Client\Endpoint
{
    protected $agreement_id;
    /**
     * Update the lifecycle status of an agreement: `pending`, `open` or `cancelled`.
     **Pending**: When an agreement is switched to Pending, it is finalized for signing by validating all inputs and, if communication is enabled, sends out all or the first batch of invitations. A Pending agreement can be either cancelled or opened.
     **Open**: If the agreement is opened, the signing process is paused and reset to allow making any changes you would like to do.
     **Cancelled**: If you cancel the agreement, it is moved into an end state where no more changes are allowed. If communication is enabled and the agreement is cancelled, notifications will be sent to all participants.
     *
     * @param string $agreementId POST /agreements/:agreement_id/lifecycle parameter
     * @param null|\Struqtur\Zigned\Api\Model\AgreementsAgreementIdLifecyclePostBody $requestBody 
     */
    public function __construct(string $agreementId, ?\Struqtur\Zigned\Api\Model\AgreementsAgreementIdLifecyclePostBody $requestBody = null)
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
        return str_replace(['{agreement_id}'], [$this->agreement_id], '/agreements/{agreement_id}/lifecycle');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Struqtur\Zigned\Api\Model\AgreementsAgreementIdLifecyclePostBody) {
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
     * @throws \Struqtur\Zigned\Api\Exception\PostAgreementsAgreementIdLifecycleBadRequestException
     *
     * @return null|\Struqtur\Zigned\Api\Model\AgreementsAgreementIdLifecyclePostResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdLifecyclePostResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Api\Exception\PostAgreementsAgreementIdLifecycleBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdLifecyclePostResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}