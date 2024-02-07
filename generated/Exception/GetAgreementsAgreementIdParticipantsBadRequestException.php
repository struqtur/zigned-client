<?php

namespace Vendor\Library\Generated\Exception;

class GetAgreementsAgreementIdParticipantsBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsGetResponse400
     */
    private $agreementsAgreementIdParticipantsGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsGetResponse400 $agreementsAgreementIdParticipantsGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements/:agreement_id/participants Error response');
        $this->agreementsAgreementIdParticipantsGetResponse400 = $agreementsAgreementIdParticipantsGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdParticipantsGetResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsGetResponse400
    {
        return $this->agreementsAgreementIdParticipantsGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}