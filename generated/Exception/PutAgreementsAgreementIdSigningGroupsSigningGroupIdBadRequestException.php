<?php

namespace Vendor\Library\Generated\Exception;

class PutAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400
     */
    private $agreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400 $agreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('PUT /agreements/:agreement_id/signing_groups/:signing_group_id Error response');
        $this->agreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400 = $agreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400
    {
        return $this->agreementsAgreementIdSigningGroupsSigningGroupIdPutResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}