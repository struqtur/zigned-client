<?php

namespace Vendor\Library\Generated\Model;

class AgreementsAgreementIdPutResponse400 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var AgreementsAgreementIdPutResponse400Error
     */
    protected $error;
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return AgreementsAgreementIdPutResponse400Error
     */
    public function getError() : AgreementsAgreementIdPutResponse400Error
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param AgreementsAgreementIdPutResponse400Error $error
     *
     * @return self
     */
    public function setError(AgreementsAgreementIdPutResponse400Error $error) : self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
}