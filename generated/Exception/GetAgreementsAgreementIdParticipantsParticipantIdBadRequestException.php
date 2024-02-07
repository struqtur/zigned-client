<?php

namespace Vendor\Library\Generated\Exception;

class GetAgreementsAgreementIdParticipantsParticipantIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdGetResponse400
     */
    private $agreementsAgreementIdParticipantsParticipantIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdGetResponse400 $agreementsAgreementIdParticipantsParticipantIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements/:agreement_id/participants/:participant_id Error response');
        $this->agreementsAgreementIdParticipantsParticipantIdGetResponse400 = $agreementsAgreementIdParticipantsParticipantIdGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdParticipantsParticipantIdGetResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdGetResponse400
    {
        return $this->agreementsAgreementIdParticipantsParticipantIdGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}