<?php

namespace Struqtur\Zigned\Exception;

class PostAgreementsAgreementIdDocumentsMainBadRequestException extends BadRequestException
{
    /**
     * @var \Struqtur\Zigned\Model\AgreementsAgreementIdDocumentsMainPostResponse400
     */
    private $agreementsAgreementIdDocumentsMainPostResponse400;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Struqtur\Zigned\Model\AgreementsAgreementIdDocumentsMainPostResponse400 $agreementsAgreementIdDocumentsMainPostResponse400, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('POST /agreements/:agreement_id/documents/main Error response');
        $this->agreementsAgreementIdDocumentsMainPostResponse400 = $agreementsAgreementIdDocumentsMainPostResponse400;
        $this->response = $response;
    }
    public function getAgreementsAgreementIdDocumentsMainPostResponse400() : \Struqtur\Zigned\Model\AgreementsAgreementIdDocumentsMainPostResponse400
    {
        return $this->agreementsAgreementIdDocumentsMainPostResponse400;
    }
    public function getResponse() : \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}