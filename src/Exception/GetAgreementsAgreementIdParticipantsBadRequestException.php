<?php

namespace Struqtur\Zigned\Api\Exception;

class GetAgreementsAgreementIdParticipantsBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsAgreementIdParticipantsGetResponse400
     */
    private $agreementsAgreementIdParticipantsGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsAgreementIdParticipantsGetResponse400 $agreementsAgreementIdParticipantsGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements/:agreement_id/participants Error response');
        $this->agreementsAgreementIdParticipantsGetResponse400 = $agreementsAgreementIdParticipantsGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdParticipantsGetResponse400() : \Struqtur\Zigned\Api\Model\AgreementsAgreementIdParticipantsGetResponse400
    {
        return $this->agreementsAgreementIdParticipantsGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}