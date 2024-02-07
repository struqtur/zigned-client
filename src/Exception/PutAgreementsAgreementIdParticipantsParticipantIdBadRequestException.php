<?php

namespace Struqtur\Zigned\Api\Exception;

class PutAgreementsAgreementIdParticipantsParticipantIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsAgreementIdParticipantsParticipantIdPutResponse400
     */
    private $agreementsAgreementIdParticipantsParticipantIdPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsAgreementIdParticipantsParticipantIdPutResponse400 $agreementsAgreementIdParticipantsParticipantIdPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('PUT /agreements/:agreement_id/participants/:participant_id Error response');
        $this->agreementsAgreementIdParticipantsParticipantIdPutResponse400 = $agreementsAgreementIdParticipantsParticipantIdPutResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdParticipantsParticipantIdPutResponse400() : \Struqtur\Zigned\Api\Model\AgreementsAgreementIdParticipantsParticipantIdPutResponse400
    {
        return $this->agreementsAgreementIdParticipantsParticipantIdPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}