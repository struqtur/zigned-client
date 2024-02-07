<?php

namespace Vendor\Library\Generated\Exception;

class GetAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400
     */
    private $agreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400 $agreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('GET /agreements/:agreement_id/signing_groups/:signing_group_id Error response');
        $this->agreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400 = $agreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400
    {
        return $this->agreementsAgreementIdSigningGroupsSigningGroupIdGetResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}