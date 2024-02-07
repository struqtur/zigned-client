<?php

namespace Vendor\Library\Generated\Exception;

class DeleteAgreementsAgreementIdParticipantsParticipantIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse400
     */
    private $agreementsAgreementIdParticipantsParticipantIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse400 $agreementsAgreementIdParticipantsParticipantIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /agreements/:agreement_id/participants/:participant_id Error response');
        $this->agreementsAgreementIdParticipantsParticipantIdDeleteResponse400 = $agreementsAgreementIdParticipantsParticipantIdDeleteResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdParticipantsParticipantIdDeleteResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsParticipantIdDeleteResponse400
    {
        return $this->agreementsAgreementIdParticipantsParticipantIdDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}