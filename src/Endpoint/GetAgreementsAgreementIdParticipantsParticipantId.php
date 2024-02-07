<?php

namespace Struqtur\Zigned\Api\Endpoint;

class GetAgreementsAgreementIdParticipantsParticipantId extends \Struqtur\Zigned\Api\Runtime\Client\BaseEndpoint implements \Struqtur\Zigned\Api\Runtime\Client\Endpoint
{
    protected $agreement_id;
    protected $participant_id;
    /**
     * Retrieves a participant of the Agreement.
     *
     * @param string $agreementId GET /agreements/:agreement_id/participants/:participant_id parameter
     * @param string $participantId GET /agreements/:agreement_id/participants/:participant_id parameter
     */
    public function __construct(string $agreementId, string $participantId)
    {
        $this->agreement_id = $agreementId;
        $this->participant_id = $participantId;
    }
    use \Struqtur\Zigned\Api\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(['{agreement_id}', '{participant_id}'], [$this->agreement_id, $this->participant_id], '/agreements/{agreement_id}/participants/{participant_id}');
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
     * @throws \Struqtur\Zigned\Api\Exception\GetAgreementsAgreementIdParticipantsParticipantIdBadRequestException
     *
     * @return null|\Struqtur\Zigned\Api\Model\AgreementsAgreementIdParticipantsParticipantIdGetResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdParticipantsParticipantIdGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Struqtur\Zigned\Api\Exception\GetAgreementsAgreementIdParticipantsParticipantIdBadRequestException($serializer->deserialize($body, 'Struqtur\\Zigned\\Api\\Model\\AgreementsAgreementIdParticipantsParticipantIdGetResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}