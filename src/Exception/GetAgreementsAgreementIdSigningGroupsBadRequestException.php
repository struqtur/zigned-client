<?php

namespace Struqtur\Zigned\Api\Exception;

class GetAgreementsAgreementIdSigningGroupsBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsGetResponse400
     */
    private $agreementsAgreementIdSigningGroupsGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsGetResponse400 $agreementsAgreementIdSigningGroupsGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements/:agreement_id/signing_groups Error response');
        $this->agreementsAgreementIdSigningGroupsGetResponse400 = $agreementsAgreementIdSigningGroupsGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdSigningGroupsGetResponse400() : \Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsGetResponse400
    {
        return $this->agreementsAgreementIdSigningGroupsGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}