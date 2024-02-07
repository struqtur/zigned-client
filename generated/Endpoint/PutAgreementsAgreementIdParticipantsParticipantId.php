<?php

namespace Vendor\Library\Generated\Endpoint;

class PutAgreementsAgreementIdParticipantsParticipantId extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $agreement_id;
    protected $participant_id;
    /**
     * Updates an existing participant. The agreement must be in draft status in order to update a participant. If the agreement is in open status, the exisiting participants are immutable. In the case of an open agreement, you can still add and delete participants.
     *
     * @param string $agreementId PUT /agreements/:agreement_id/participants/:participant_id parameter
     * @param string $participantId PUT /agreements/:agreement_id/participants/:participant_id parameter
     * @param null|\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdPutBody $requestBody 
     */
    public function __construct(string $agreementId, string $participantId, ?\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdPutBody $requestBody = null)
    {
        $this->agreement_id = $agreementId;
        $this->participant_id = $participantId;
        $this->body = $requestBody;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(['{agreement_id}', '{participant_id}'], [$this->agreement_id, $this->participant_id], '/agreements/{agreement_id}/participants/{participant_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdPutBody) {
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
     * @throws \Vendor\Library\Generated\Exception\PutAgreementsAgreementIdParticipantsParticipantIdBadRequestException
     *
     * @return null|\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdPutResponse200
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdParticipantsParticipantIdPutResponse200', 'json');
        }
        if (is_null($contentType) === false && (400 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\PutAgreementsAgreementIdParticipantsParticipantIdBadRequestException($serializer->deserialize($body, 'Vendor\\Library\\Generated\\Model\\AgreementsAgreementIdParticipantsParticipantIdPutResponse400', 'json'), $response);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return ['HTTP_1'];
    }
}