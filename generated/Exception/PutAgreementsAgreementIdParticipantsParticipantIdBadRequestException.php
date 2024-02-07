<?php

namespace Vendor\Library\Generated\Exception;

class PutAgreementsAgreementIdParticipantsParticipantIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdPutResponse400
     */
    private $agreementsAgreementIdParticipantsParticipantIdPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdPutResponse400 $agreementsAgreementIdParticipantsParticipantIdPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('PUT /agreements/:agreement_id/participants/:participant_id Error response');
        $this->agreementsAgreementIdParticipantsParticipantIdPutResponse400 = $agreementsAgreementIdParticipantsParticipantIdPutResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdParticipantsParticipantIdPutResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdPutResponse400
    {
        return $this->agreementsAgreementIdParticipantsParticipantIdPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}