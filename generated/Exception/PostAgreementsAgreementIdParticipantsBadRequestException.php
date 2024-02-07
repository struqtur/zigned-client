<?php

namespace Vendor\Library\Generated\Exception;

class PostAgreementsAgreementIdParticipantsBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsPostResponse400
     */
    private $agreementsAgreementIdParticipantsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsPostResponse400 $agreementsAgreementIdParticipantsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('POST /agreements/:agreement_id/participants Error response');
        $this->agreementsAgreementIdParticipantsPostResponse400 = $agreementsAgreementIdParticipantsPostResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdParticipantsPostResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdParticipantsPostResponse400
    {
        return $this->agreementsAgreementIdParticipantsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}