<?php

namespace Vendor\Library\Generated\Exception;

class PostAgreementsAgreementIdLifecycleBadRequestException extends BadRequestException
{
    /**
     * @var \Vendor\Library\Generated\Model\AgreementsAgreementIdLifecyclePostResponse400
     */
    private $agreementsAgreementIdLifecyclePostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\AgreementsAgreementIdLifecyclePostResponse400 $agreementsAgreementIdLifecyclePostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('POST /agreements/:agreement_id/lifecycle Error response');
        $this->agreementsAgreementIdLifecyclePostResponse400 = $agreementsAgreementIdLifecyclePostResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdLifecyclePostResponse400() : \Vendor\Library\Generated\Model\AgreementsAgreementIdLifecyclePostResponse400
    {
        return $this->agreementsAgreementIdLifecyclePostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}