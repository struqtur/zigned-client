<?php

namespace Struqtur\Zigned\Api\Exception;

class GetAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400
     */
    private $agreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400 $agreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements/:agreement_id/signing_groups/:signing_group_id Error response');
        $this->agreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400 = $agreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400() : \Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400
    {
        return $this->agreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}