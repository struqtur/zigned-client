<?php

namespace Struqtur\Zigned\Exception;

class GetAgreementsAgreementIdParticipantsParticipantIdSignEventsBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Model\AgreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse400
     */
    private $agreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Model\AgreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse400 $agreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements/:agreement_id/participants/:participant_id/sign_events Error response');
        $this->agreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse400 = $agreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse400() : \Struqtur\Zigned\Model\AgreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse400
    {
        return $this->agreementsAgreementIdParticipantsParticipantIdSignEventsGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}