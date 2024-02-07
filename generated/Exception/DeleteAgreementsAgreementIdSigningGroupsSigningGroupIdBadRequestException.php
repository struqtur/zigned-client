<?php

namespace Vendor\Library\Generated\Exception;

class DeleteAgreementsAgreementIdSigningGroupsSigningGroupIdBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse400
     */
    private $agreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse400 $agreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('DELETE /agreements/:agreement_id/signing_groups/:signing_group_id Error response');
        $this->agreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse400 = $agreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse400
    {
        return $this->agreementsAgreementIdSigningGroupsSigningGroupIdDeleteResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}