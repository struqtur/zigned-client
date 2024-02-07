<?php

namespace Struqtur\Zigned\Api\Exception;

class PostAgreementsAgreementIdSigningGroupsBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsPostResponse400
     */
    private $agreementsAgreementIdSigningGroupsPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsPostResponse400 $agreementsAgreementIdSigningGroupsPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('POST /agreements/:agreement_id/signing_groups Error response');
        $this->agreementsAgreementIdSigningGroupsPostResponse400 = $agreementsAgreementIdSigningGroupsPostResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdSigningGroupsPostResponse400() : \Struqtur\Zigned\Api\Model\AgreementsAgreementIdSigningGroupsPostResponse400
    {
        return $this->agreementsAgreementIdSigningGroupsPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}